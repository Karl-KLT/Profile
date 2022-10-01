














@extends('layouts.app')
@section('container')
    <div class="alert alert-danger">
        <ul>under devolopment.</ul>
        <li>u will see some mistakes in my site</li>
    </div>
    
    <div class="pt-3 fw-bold">
        <h4 style="text-decoration: underline;letter-spacing: 1px">My skills</h4>
    </div>
    <div class="mt-1">

        {{-- ////////////////////////////////////////// --}}
        <div style="user-select: none;">

            <div class="Box container-fluid navbar w-100 my-3" id="HTML">
                <div style="letter-spacing: 0.8px;font-weight: bold;">
                    HTML
                </div>

                <div class="text-secondary" style="font-weight: bold;"><span id="HTMLNum"></span>%</div>
            </div>

            <div class="Box container-fluid navbar w-100 my-3" id="CSS">
                <div style="letter-spacing: 0.8px;font-weight: bold;">
                    CSS
                </div>

                <div class="text-secondary" style="font-weight: bold;"><span id="CSSNum"></span>%</div>
            </div>

            <div class="Box container-fluid navbar w-100 my-3" id="Laravel">
                <div style="letter-spacing: 0.8px;font-weight: bold;">
                    Laravel
                </div>

                <div class="text-secondary" style="font-weight: bold;"><span id="LaravelNum"></span>%</div>
            </div>

        </div>
        {{-- ///////////////////////////////////////////// --}}
        <style>.Box{width: 300px;height: auto;background-color: #CDE4DD;border-radius: 10px; }</style>
        @if (request()->path('skills'))
            <script>

                window.addEventListener('load',function(){function StartCount(id , Max , id_div){var Rok = document.getElementById(id).innerHTML=0;var JSCON = setInterval(function(){document.getElementById(id).innerHTML = Rok+=1;if(document.getElementById(id).innerHTML == Max){clearInterval(JSCON)}},37);}

                    StartCount('HTMLNum' , 83 , 'HTML');
                    StartCount('CSSNum' , 67 , 'CSS');
                    StartCount('LaravelNum' , 74 , 'Laravel');
                })

            </script>
        @endif
    </div>
@endsection
