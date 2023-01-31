@extends('pages.master')
@section('title','Welcome our hoomepage')
@section('content')
<div class="card">
    <h2 @class([
    'green' => $isActive,
    'red' => ! $isActive,
])>
        Title heading
    </h2>
    <h5>Title Description, dec 7, 2022</h5>
    <div class="fakeimg" style="height: 200px;;">Image</div>
    <p>Some text....</p>
    <p> fsljf jflsjf jdfsf dflsjfldsjfoiern foiwerfl fwsjfw</p>
</div>
@endsection
