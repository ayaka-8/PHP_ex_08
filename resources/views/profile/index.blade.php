@extends('layouts.front_profile')


@section('content')
    <div class="container">
        <div class="row">
            <h2>ユーザー一覧</h2>
        </div>
        <div class="col-md-4">
                <a href="{{ action('Admin\ProfileController@add') }}" role="button" class="btn btn-primary">新規登録</a>
        </div>
        <hr color="#c0c0c0">
            <div class="row">
                <div class="profiles col-md-8 mx-auto mt-3">
                    @foreach($profiles as $profile)
                        <div class="profile">
                            <div class="row">
                                <div class="text col-md-6">
                                    <div class="name">
                                        <p>氏名　{{ $profile->name }}</p>
                                    </div>
                                    <div class="date">
                                        <p>更新日　{{ $profile->updated_at->format('Y年m月d日') }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr color="#c0c0c0">
                    @endforeach
                </div>
            </div>
        </div>
@endsection
