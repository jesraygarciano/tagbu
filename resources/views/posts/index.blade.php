@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="page-header">
                    <h3>All events</h3>
                </div>

                @forelse ($posts as $post)
                <div class="panel panel-default">

                    <div class="container py-3">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="panel-heading">
                                        <h3 class="display-5">{{ $post->title }}</h3>
                                    </div>
                                        
                                    <div class="panel-body">
                                        {{ $post->body}}
                                    </div>
                            </div>
                        </div>
                    </div>


                    @if (Auth::check())
                        <div class="panel-footer">
                            <favorite
                                :post={{ $post->id }}
                                :favorited={{ $post->favorited() ? 'true' : 'false' }}
                            ></favorite>
                        </div>
                    @endif
                </div>
                @empty
                <p>No Post created.</p>
                @endforelse
                
                {{ $posts->links() }}
            </div>
        </div>
    </div>

@endsection

