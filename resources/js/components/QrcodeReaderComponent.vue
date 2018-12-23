<template>
    <div>
        <p class="error">{{ error }}</p>

        <p class="decode-result">Last result:
            <b>
                {{ result }}
            </b>
        </p>

        <button @click="link"> 綁定籃子</button>

        <qrcode-stream @decode="onDecode" @init="onInit" />
    </div>
</template>

<script>
    export default {
        data () {
            return {
                result: '',
                error: '',
                link:'google.com'
            }
        },

        methods: {
            async onDecode (result) {
                try {
                    this.result = result;
                    this.pauseCamera(); // 暫停鏡頭準備調用

                    // 調用 redeem 進行兌換
                    let message = await this.redeem(result);
                    // 兌換成功後彈出訊息並重新啟用鏡頭
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

            redeem (content) {
                return new Promise((resolve, reject) => {
                    // 兌換票券請求
                    // if (content) {
                    //     resolve('Success');
                    // } else {
                    //     reject('failed');
                    // }
                    resolve('Success');
                })
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