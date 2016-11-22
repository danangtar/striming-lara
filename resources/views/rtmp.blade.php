@extends('layouts.streaming')

@section('title', 'RTMP Streaming')

@section('scripts')
<script src="js/flowplayer-3.2.12.min.js"></script>
<script>
    $f("player", "http://releases.flowplayer.org/swf/flowplayer-3.2.18.swf", {
        clip: {
            url: 'mp4:AA.mp4',
            scaling: 'fit',
            provider: 'hddn'
        },

        plugins: {
            hddn: {
                url: "flowplayer.rtmp-3.2.13.swf",

                // netConnectionUrl defines where the streams are found
                netConnectionUrl: 'rtmp://10.151.43.2:1935/vod2'
            }
        },
        canvas: {
            backgroundGradient: 'none'
        }
    });
</script>
@endsection


@section('content')
    <div class="container">
        <h1 class="header center orange-text">RTMP Streaming</h1>
        <div class="divider"></div>
        <div class="section">
            <div class="row">
                <div class="col s12 m6 l4">
                    <div id="player" class="video-container">
                        <img src="img/AA.png"/>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection