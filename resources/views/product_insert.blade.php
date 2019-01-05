@extends('layout2.default')

@section('content')
    <table>
    <form action="/shopping" method="post">
        {{ csrf_field() }}
        <label>產品A:</label>
        <input type="hidden" name="id" value=1>
        <input type="hidden" name="member_id" value=1>
        <input type=number name="amount">
        <button type="submit">新增</button>
    </form>
    <form action="/shopping/destory" method="post">
        {{ csrf_field() }}
        <input type="hidden" name="id" value=1>
        <input type="hidden" name="member_id" value=1>
        <button type="submit">刪除</button>
    </form>
    <form action="/shopping/update" method="post">
        {{ csrf_field() }}
        <input type="hidden" name="id" value=1>
        <input type="hidden" name="member_id" value=1>
        <input type=number name="amount">
        <button type="submit">更新</button>
     </form>
    </table>

    <table>
        <form action="/shopping" method="post">
            {{ csrf_field() }}
            <label>產品B:</label>
            <input type="hidden" name="id" value=2>
            <input type="hidden" name="member_id" value=1>
            <input type=number name="amount">
            <button type="submit">新增</button>
        </form>
        <form action="/shopping/destory" method="post">
            {{ csrf_field() }}
            <input type="hidden" name="id" value=2>
            <input type="hidden" name="member_id" value=1>
            <button type="submit">刪除</button>
        </form>
        <form action="/shopping/update" method="post">
            {{ csrf_field() }}
            <input type="hidden" name="id" value=2>
            <input type="hidden" name="member_id" value=1>
            <input type=number name="amount">
            <button type="submit">更新</button>
        </form>
    </table>

    <table>
        <form action="/shopping" method="post">
            {{ csrf_field() }}
            <label>產品C:</label>
            <input type="hidden" name="id" value=3>
            <input type="hidden" name="member_id" value=1>
            <input type=number name="amount">
            <button type="submit">新增</button>
        </form>
        <form action="/shopping/destory" method="post">
            {{ csrf_field() }}
            <input type="hidden" name="id" value=3>
            <input type="hidden" name="member_id" value=1>
            <button type="submit">刪除</button>
        </form>
        <form action="/shopping/update" method="post">
            {{ csrf_field() }}
            <input type="hidden" name="id" value=3>
            <input type="hidden" name="member_id" value=1>
            <input type=number name="amount">
            <button type="submit">更新</button>
        </form>
    </table>

    <form action="/shopping/checkout" method="post">
        {{ csrf_field() }}
        <button type="submit">結帳</button>
        <input type="hidden" name="member_id" value=1>
    </form>

    @endsection
