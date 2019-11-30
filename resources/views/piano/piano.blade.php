@extends('dasboard.layout.public')
@push('styles')
    <link rel="stylesheet" type="text/css" href="{{ asset('style/main.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('style/pace.css') }}" />
@endpush
@push('scripts')
    {{-- <script type="text/javascript" src="{{ asset('js/pace.min.js') }}"></script> --}}
    <script type="text/javascript" src="{{ asset('js/piano.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/notes.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/translators/translator.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/translators/retranslator.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/arm.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/db/music_list.js') }}"></script>
    <script async type="text/javascript" src="{{ asset('js/keyboard.js') }}"></script>
    {{-- <script async type="text/javascript" src="{{ asset('js/dd/window_fnc.js') }}"></script> --}}
    <script async type="text/javascript" src="{{ asset('js/dd/index.js') }}"></script>
    {{-- <script async type="text/javascript" src="{{ asset('js/dd/window_dom.js') }}"></script> --}}
    <script async type="text/javascript" src="{{ asset('js/lastsession.js') }}"></script>
@endpush
@section('content')
  <div id="piano">
    <div id="btns">
        {{-- <div id="styled" class="text" onclick="piano.styler()">Estilos</div> --}}
        <div id="assistd" class="text" onclick="piano.assist()">Teclado</div>
        {{-- <div id="recordd" class="text" onclick="win_fnc.viewer('recorder')">Recorder</div>
        <div id="sheetd" class="text" onclick="win_fnc.viewer('sheet')">Sheets</div> --}}
    </div>
    <div id="white"></div>
    <div id="black"></div>
    <div id="audio" onerror="location.reload()"></div>
  </div>
  <div id='win'></div>
@endsection
