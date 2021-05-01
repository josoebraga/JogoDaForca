@extends('layouts.app')

@section('content')

Boa sorte {{$jogadores[0]->name}}!
{{$word}}
<div id="divAcertos">
@for($i = 0; $i < strlen($word); $i++)
<input type="hidden" value="{{session('L'.$i)}}">
@endfor
<input id="erros" type="hidden" value="{{session('erros')}}">
<img src="{{ asset('storage/image/forca/'.session('erros').'.png') }}" alt="HTML5 Doctor Logo" width="200px" heidth="100px"/>
<div id="mensagem" style="display: none;">Você Perdeu!</div>
</div>
{{-- Se erro = 0, mostra 0.png, se erro > 5 fim do jogo --}}
<img>
<form>
    {{ csrf_field() }}
    <div id="divAdivinharLetra">
        <input id="adivinharLetra" type="text" onchange="revelaLetra(this.value);" maxlength="1"><br>
    </div>
    @for ($i = 0; $i < strlen($word); $i++)
        <input type="text" id="L{{$i}}" name="L{{$i}}" maxlength="1" value="{{ strtoupper($letras[$i]) == strtoupper(session('L'.$i)) ? strtoupper($letras[$i]) : '' }}" style="width: 50px; text-align: left;" disabled>
        {{-- Se todas as letras estão preenchidas, liberar botão pra próxima palavra --}}
    @endfor
</form>
@endsection

<script type="text/javascript">

function bloqueiaInput(){
    if(document.getElementById('erros').value > 5) {
                document.getElementById("adivinharLetra").disabled = true;
                document.getElementById("divAdivinharLetra").style.display = "none";
                document.getElementById("mensagem").style.display = "";
            }
}
setInterval(bloqueiaInput, 1000);



function revelaLetra(letra) {

            if (window.XMLHttpRequest) {
            requisicao = new XMLHttpRequest();
            } else if (window.ActiveXObject) {
            requisicao = new ActiveXObject("Microsoft.XMLHTTP");
            }

            var url = "/jogoRevelaLetra/" + {{$jogadoresPalavrasModel[0]->id}} + '/' + letra;

            requisicao.open("Get", url, true);
            //req.send();

            requisicao.onreadystatechange = function () {
            var resposta = requisicao.responseText;
            obj = JSON.parse(resposta);
            //Gravar letras já reveladas e letras já usadas
            try { if(letra.toLowerCase() == obj[0].L1.toLowerCase()) { document.getElementById('L0').value = letra.toUpperCase(); } } catch(err) {}
            try { if(letra.toLowerCase() == obj[0].L2.toLowerCase()) { document.getElementById('L1').value = letra.toUpperCase(); } } catch(err) {}
            try { if(letra.toLowerCase() == obj[0].L3.toLowerCase()) { document.getElementById('L2').value = letra.toUpperCase(); } } catch(err) {}
            try { if(letra.toLowerCase() == obj[0].L4.toLowerCase()) { document.getElementById('L3').value = letra.toUpperCase(); } } catch(err) {}
            try { if(letra.toLowerCase() == obj[0].L5.toLowerCase()) { document.getElementById('L4').value = letra.toUpperCase(); } } catch(err) {}
            try { if(letra.toLowerCase() == obj[0].L6.toLowerCase()) { document.getElementById('L5').value = letra.toUpperCase(); } } catch(err) {}
            try { if(letra.toLowerCase() == obj[0].L7.toLowerCase()) { document.getElementById('L6').value = letra.toUpperCase(); } } catch(err) {}
            try { if(letra.toLowerCase() == obj[0].L8.toLowerCase()) { document.getElementById('L7').value = letra.toUpperCase(); } } catch(err) {}
            try { if(letra.toLowerCase() == obj[0].L9.toLowerCase()) { document.getElementById('L8').value = letra.toUpperCase(); } } catch(err) {}
            try { if(letra.toLowerCase() == obj[0].L10.toLowerCase()) { document.getElementById('L9').value = letra.toUpperCase(); } } catch(err) {}
            try { if(letra.toLowerCase() == obj[0].L11.toLowerCase()) { document.getElementById('L10').value = letra.toUpperCase(); } } catch(err) {}
            try { if(letra.toLowerCase() == obj[0].L12.toLowerCase()) { document.getElementById('L11').value = letra.toUpperCase(); } } catch(err) {}
            try { if(letra.toLowerCase() == obj[0].L13.toLowerCase()) { document.getElementById('L12').value = letra.toUpperCase(); } } catch(err) {}
            try { if(letra.toLowerCase() == obj[0].L14.toLowerCase()) { document.getElementById('L13').value = letra.toUpperCase(); } } catch(err) {}
            try { if(letra.toLowerCase() == obj[0].L15.toLowerCase()) { document.getElementById('L14').value = letra.toUpperCase(); } } catch(err) {}
            try { if(letra.toLowerCase() == obj[0].L16.toLowerCase()) { document.getElementById('L15').value = letra.toUpperCase(); } } catch(err) {}
            try { if(letra.toLowerCase() == obj[0].L17.toLowerCase()) { document.getElementById('L16').value = letra.toUpperCase(); } } catch(err) {}
            try { if(letra.toLowerCase() == obj[0].L18.toLowerCase()) { document.getElementById('L17').value = letra.toUpperCase(); } } catch(err) {}
            try { if(letra.toLowerCase() == obj[0].L19.toLowerCase()) { document.getElementById('L18').value = letra.toUpperCase(); } } catch(err) {}
            try { if(letra.toLowerCase() == obj[0].L20.toLowerCase()) { document.getElementById('L19').value = letra.toUpperCase(); } } catch(err) {}
            try { if(letra.toLowerCase() == obj[0].L21.toLowerCase()) { document.getElementById('L20').value = letra.toUpperCase(); } } catch(err) {}
            try { if(letra.toLowerCase() == obj[0].L22.toLowerCase()) { document.getElementById('L21').value = letra.toUpperCase(); } } catch(err) {}
            try { if(letra.toLowerCase() == obj[0].L23.toLowerCase()) { document.getElementById('L22').value = letra.toUpperCase(); } } catch(err) {}
            try { if(letra.toLowerCase() == obj[0].L24.toLowerCase()) { document.getElementById('L23').value = letra.toUpperCase(); } } catch(err) {}
            try { if(letra.toLowerCase() == obj[0].L25.toLowerCase()) { document.getElementById('L24').value = letra.toUpperCase(); } } catch(err) {}
            try { if(letra.toLowerCase() == obj[0].L26.toLowerCase()) { document.getElementById('L25').value = letra.toUpperCase(); } } catch(err) {}
            try { if(letra.toLowerCase() == obj[0].L27.toLowerCase()) { document.getElementById('L26').value = letra.toUpperCase(); } } catch(err) {}
            try { if(letra.toLowerCase() == obj[0].L28.toLowerCase()) { document.getElementById('L27').value = letra.toUpperCase(); } } catch(err) {}
            try { if(letra.toLowerCase() == obj[0].L29.toLowerCase()) { document.getElementById('L28').value = letra.toUpperCase(); } } catch(err) {}
            try { if(letra.toLowerCase() == obj[0].L30.toLowerCase()) { document.getElementById('L29').value = letra.toUpperCase(); } } catch(err) {}
            try { if(letra.toLowerCase() == obj[0].L31.toLowerCase()) { document.getElementById('L30').value = letra.toUpperCase(); } } catch(err) {}
            try { if(letra.toLowerCase() == obj[0].L32.toLowerCase()) { document.getElementById('L31').value = letra.toUpperCase(); } } catch(err) {}
            try { if(letra.toLowerCase() == obj[0].L33.toLowerCase()) { document.getElementById('L32').value = letra.toUpperCase(); } } catch(err) {}
            try { if(letra.toLowerCase() == obj[0].L34.toLowerCase()) { document.getElementById('L33').value = letra.toUpperCase(); } } catch(err) {}
            try { if(letra.toLowerCase() == obj[0].L35.toLowerCase()) { document.getElementById('L34').value = letra.toUpperCase(); } } catch(err) {}
            try { if(letra.toLowerCase() == obj[0].L36.toLowerCase()) { document.getElementById('L35').value = letra.toUpperCase(); } } catch(err) {}
            try { if(letra.toLowerCase() == obj[0].L37.toLowerCase()) { document.getElementById('L36').value = letra.toUpperCase(); } } catch(err) {}
            try { if(letra.toLowerCase() == obj[0].L38.toLowerCase()) { document.getElementById('L37').value = letra.toUpperCase(); } } catch(err) {}
            try { if(letra.toLowerCase() == obj[0].L39.toLowerCase()) { document.getElementById('L38').value = letra.toUpperCase(); } } catch(err) {}
            try { if(letra.toLowerCase() == obj[0].L40.toLowerCase()) { document.getElementById('L39').value = letra.toUpperCase(); } } catch(err) {}
            try { if(letra.toLowerCase() == obj[0].L41.toLowerCase()) { document.getElementById('L40').value = letra.toUpperCase(); } } catch(err) {}
            try { if(letra.toLowerCase() == obj[0].L42.toLowerCase()) { document.getElementById('L41').value = letra.toUpperCase(); } } catch(err) {}
            try { if(letra.toLowerCase() == obj[0].L43.toLowerCase()) { document.getElementById('L42').value = letra.toUpperCase(); } } catch(err) {}
            try { if(letra.toLowerCase() == obj[0].L44.toLowerCase()) { document.getElementById('L43').value = letra.toUpperCase(); } } catch(err) {}
            try { if(letra.toLowerCase() == obj[0].L45.toLowerCase()) { document.getElementById('L44').value = letra.toUpperCase(); } } catch(err) {}
            try { if(letra.toLowerCase() == obj[0].L46.toLowerCase()) { document.getElementById('L45').value = letra.toUpperCase(); } } catch(err) {}

            refreshDiv();

    };

    requisicao.send(null);


}

function refreshDiv(){
            $("#divAcertos").load(" #divAcertos > *");
            if(document.getElementById('erros').value > 5) {
                document.getElementById("adivinharLetra").disabled = true;
                document.getElementById("divAdivinharLetra").style.display = "none";
            }
        }

</script>

