<div id="container_Skills">
    {{-- front --}}


    {{-- styls --}}
    <style>.Box{width: 100%;height: auto;background-color: #CDE4DD;border-radius: 10px; }</style>








    {{-- scripts --}}
    <script>
        function Counter(id , Max){
            var Rok_bar = document.getElementById(id+"Num_bar").style.width = 0
            var Rok = document.getElementById(id+'Num').innerHTML = 0

            document.getElementById(id).style.opacity = 1
            var JSCON = setInterval(function(){
                document.getElementById(id+'Num').innerHTML = Rok += 1
                document.getElementById(id+"Num_bar").style.width = `${Rok_bar += 1}%`
                if(document.getElementById(id+'Num').innerHTML >= Max){
                    clearInterval(JSCON)
                }
            }, 20);
        }

        function CreateSkill(Name=null){
            var data = '';
            data += `
                <div class="Box container-fluid navbar mt-2" id="${Name}">
                    <div style="letter-spacing: 0.8px;font-weight: bold;">
                        ${Name}
                    </div>
                    <div  class="text-secondary" style="font-weight: bold;"><span id="${Name}Num"></span>%</div>
                    <div style="display: flex;width: 100%;height: 10px;">
                        <div class="badge bg-secondary w-100 p-0">
                            <div class="badge" id="${Name}Num_bar" style="float:left;height: 10px;background-color: #A2CABD;">&nbsp;</div>
                        </div>
                    </div>
                </div>
            `
            document.getElementById('container_Skills').innerHTML += data
            return Name;
        }


        Counter(CreateSkill('HTML') , 84)
        Counter(CreateSkill('CSS') , 63)
        Counter(CreateSkill('JS') , 74)
        Counter(CreateSkill('PYTHON') , 36)
        Counter(CreateSkill('BOOTSTRAP') , 49)
        Counter(CreateSkill('LARAVEL') , 85)


    </script>
</div>

