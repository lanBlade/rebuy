@extends('layouts.admin')

@section('admin.title', '编辑《' . $post->title . '》')

@section('admin.content')
    <div class="row">
        <div class="col-sm-12">
            @include('manage.posts.partials.form', [
                'method' => 'PATCH',
                'button' => '确定更新'
            ])
        </div>
    </div>
@stop

@include('manage.posts.partials.scripts')