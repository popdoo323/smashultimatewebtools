<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MSBT Editor</title>
    <link rel="stylesheet" href="../css/msbt.css">
</head>

<body>

    <form method="post" action="{{action('MSBTController@StoreMSBT')}}" enctype="multipart/form-data" id="openForm">
        <input name="_token" type="hidden" value="{{ csrf_token() }}" />
        <input name="fileInput" id='fileInput' type='file' accept=".msbt" hidden />
    </form>

    <form method="post" action="{{action('MSBTController@JSONtoMSBT')}}" enctype="multipart/form-data" id="saveForm">
        <input name="_token" type="hidden" value="{{ csrf_token() }}" />
        <input name="json" id="jsonInput" hidden />
    </form>

    </form>

    <div class="header">
        <button id="open">Open</button>
        <button id="find">Find</button>
        <button id="save">Save</button>
    </div>

    <div class="main">

        <div class="top">
            <select id="lstStrings" class="listbox_holder" size="0" onchange="changeTextArea(this)">
            </select>
        </div>

        <div class="mid">
            <textarea id="textarea"></textarea>

            <br>
            <br>
            <div class="find" id="searchSection">
                <div>
                    <label for="searchInput" style="font-size:1.5rem;">Search Input:</label>
                    <br>
                    <input name="searchInput" type="text" id="searchInput">
                    <br>
                    <button id="searchBtn">Search</button>
                </div>

                <div>
                    <label for="searchResults" style="font-size:1.5rem;">Search Results:</label>
                    <br>
                    <select class="listbox_holder" id="searchResults" size="5" onchange="changeTextArea(this)">
                    </select>
                </div>
            </div>

            <div class="credits">
                <h1>Credits:</h1>
                <h2><a href="https://github.com/exelix11/3DLandMSBTeditor">MSBT Original Source Code</a> - <a href="https://github.com/exelix11/">exelix11</a></h2>
                <h2><a href="https://github.com/IcySon55/3DLandMSBTeditor">MSBT Improved Source Code</a> - <a href="https://github.com/IcySon55/IcySon55">IcySon55</a></h2>
                <h2><a href="https://github.com/Coolsonickirby/MSBTEditorCli">MSBTEditorCli</a> - <a href="https://github.com/Coolsonickirby/">Coolsonickirby/Random</a></h2>
                <h2><a href="{{URL::current()}}">MSBTEditor Web Interface</a> - <a href="https://github.com/Coolsonickirby/">Coolsonickirby/Random</a></h2>
            </div>
        </div>

    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="../js/msbt.js"></script>
</body>

</html>
