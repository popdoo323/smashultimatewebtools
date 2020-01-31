<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Smash Ultimate Audio</title>
    <link rel="stylesheet" href="{{URL::asset('css/bootstrap.min.css')}}">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="{{URL::asset('js/bootstrap.min.js')}}">
    </script>
</head>

<body>
    <br>
    <div class="container">
        @if (session()->has('success'))
        <div class="card text-white bg-success mb-3">
            <div class="card-body">
                <h5 class="card-title">Success!</h5>
                {!! session()->get('success') !!}
            </div>
        </div>
        <br>
        @endif

        @if (session()->has('error'))
        <div class="card text-white bg-danger mb-3">
            <div class="card-body">
                <h5 class="card-title">Error!</h5>
                {!! session()->get('error') !!}
            </div>
        </div>
        <br>
        @endif

        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">

                    <form method="post" action="{{ action('MainController@FindType') }}" enctype="multipart/form-data">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <label for="music">Music File:</label>
                        <input type="file" class="form-control" id="music" name="music" accept="audio/wav" onchange="AlertFilesize();">
                        <small class="form-text text-muted">File Size Limit: 100mb</small>
                        <small class="form-text" style="color:red; display:none;" id="fileerror">File too big!</small>
                        <small class="form-text" style="color:orange;">Music file needs to be 48000hz sample rate! (Check PAQ for more info!)</small>
                        <br>
                        <label for="type">Select a file type:</label>
                        <select class="custom-select" id="type" onchange="UpdateType(this)">
                            <option value="nus3audio">nus3audio</option>
                            <option value="lopus">lopus</option>
                            <option value="idsp">idsp</option>
                        </select>
                        <input type="hidden" class="form-control" id="filetype" name="filetype">
                        <br>
                        <br>
                        <label for="stages">Select a song:</label>
                        <select class="custom-select" id="stages" onchange="UpdateStage(this)"></select>
                        <br>
                        <br>
                        <input type="checkbox" class="checkbox-rounded" id="loop" name="loop"
                            onchange="LoopSamples(this);">
                        <label for="loop">Enable Loop Samples</label>
                        <br>
                        <div id="loopsection">
                            <label>Samples Rate:</label>
                            <select class="custom-select" id="sampleHZ" onchange="UpdateHZ(this)">
                                <option value="48">48000hz - Smash Ultimate</option>
                                <option value="441">44100hz - Smash Custom Music / Brstm</option>
                                <option>Custom hz</option>
                            </select>
                            <br>
                            <br>
                            <div id="sampleHZdiv" style="display: none;">
                                <label for="smapleHZ">Sample HZ:</label>
                                <input type="text" class="form-control" id="sampleHZinput" name="sampleHZinput">
                                <br>
                            </div>
                            <label for="startloop">Loop Sample Start:</label>
                            <input type="text" class="form-control" id="startloop" name="startloop">
                            <br>
                            <label for="endloop">Loop Sample End:</label>
                            <input type="text" class="form-control" name="endloop" id="endloop">
                        </div>
                        <br>
                        <input type="checkbox" class="checkbox-rounded" id="advanced" name="advanced"
                            onchange="AdvancedOptions(this);">
                        <label for="loop">Enable Advanced Options</label>
                        <br>
                        <div id="advancedoptions">
                            <label for="filenameOutput">Output File Name:</label>
                            <input type="text" class="form-control" id="filenameOutput" name="filenameOutput">
                            <br>
                            <label for="hz">Audio HZ:</label>
                            <input type="text" class="form-control" id="hz" name="hz" value="48000">
                        </div>
                        <br>
                        <button type="submit" class="btn btn-primary">Convert!</button>
                    </form>
                    <br>
                </div>
                <div class="col-md-6">

                    @include('extras/credits')
                    <h2>Extra Stuff:</h2>
                    <h4><a href="wavhzchange">Convert Song to Compatible wav</a></h4>
                    <h4><a href="brstmtowav">Convert brstm/idsp/lopus to Compatible wav</a></h4>
                    <h4><a href="https://discord.gg/ASJyTrZ">Super Smash Bros. Ultimate Modding Discord</a></h4>
                </div>
            </div>
        </div>

        <br>

        @include('extras/faq')

    </div>
    <script src="./js/jquery-3.4.1.min.js"></script>
    <script>
        function AlertFilesize(){
        if(document.getElementById("music").files.length != 0){
        if(window.ActiveXObject){
        var fso = new ActiveXObject("Scripting.FileSystemObject");
        var filepath = document.getElementById('music').value;
        var thefile = fso.getFile(filepath);
        var sizeinbytes = thefile.size;
        }else{
        var sizeinbytes = document.getElementById('music').files[0].size;
        }
        if(sizeinbytes > 100000000){
        document.getElementById("fileerror").style.display = "block";
        }else{
        document.getElementById("fileerror").style.display = "none";
        }
        }else{
        document.getElementById("fileerror").style.display = "none";
        }

        }
    </script>
    <script src="./js/stages.js"></script>
</body>

</html>