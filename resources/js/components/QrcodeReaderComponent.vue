<template>
    <div>
        <p class="error">{{ error }}</p>

        <p class="decode-result" align="center">請掃描籃子上的QRcode獲取連結
            <b>
                {{ result }}
            </b>
        </p>
        <qrcode-stream @decode="onDecode" @init="onInit" />
        <button id="blend" @click="jump" type="button" class="btn btn-lg btn-block"
                v-bind:class="[btnStatus,activateClass]">
            綁定籃子
        </button>



    </div>
</template>

<script>
    export default {
        data () {
            return {
                result: '',
                error: '',
                btnStatus:'btn-secondary',
                activateClass:''
            }
        },

        methods: {
            async onDecode (result) {
                try {
                    this.result = result;
                    this.pauseCamera(); // 暫停鏡頭準備調用
                    this.btnStatus='btn-primary';
                    this.activateClass='activate';

                    Swal('Good job!',
                        message,
                        'success').then(() => {
                        this.unPauseCamera()
                    });
                } catch (error) {
                    Swal('Whoops!',
                        error.message,
                        'error').then(() => {
                        this.unPauseCamera()
                    });
                }
            },
            pauseCamera () {
                this.paused = true
            },
            unPauseCamera () {
                this.paused = false
            },

            jump(result){
                window.location.href =this.result;
            },

            async onInit (promise) {
                try {
                    await promise
                } catch (error) {
                    if (error.name === 'NotAllowedError') {
                        this.error = "ERROR: you need to grant camera access permisson"
                    } else if (error.name === 'NotFoundError') {
                        this.error = "ERROR: no camera on this device"
                    } else if (error.name === 'NotSupportedError') {
                        this.error = "ERROR: secure context required (HTTPS, localhost)"
                    } else if (error.name === 'NotReadableError') {
                        this.error = "ERROR: is the camera already in use?"
                    } else if (error.name === 'OverconstrainedError') {
                        this.error = "ERROR: installed cameras are not suitable"
                    } else if (error.name === 'StreamApiNotSupportedError') {
                        this.error = "ERROR: Stream API is not supported in this browser"
                    }
                }
            }
        }
    }
</script>

<style scoped>
    .error {
        font-weight: bold;
        color: red;
    }
</style>