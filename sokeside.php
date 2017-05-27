<?php ?>
    <div id="sokContainer">
        <h2 id="sokeOverskrift"> FINN DEN BILLIGSTE ØLEN </h2>
        <div class="sokContainer-wrapper">  
            <form action="result.php" id="sokemeny">
                <span class="rangetitle">Avstand i meter</span>
                <input name="avstand" id="avstand" type="range" min="0" max="1000" value="0" step="100" onchange="visVerdi(this.value)" />
                <span id="range">0</span><span>m</span>
                <script type="text/javascript">
                function visVerdi(newValue)
                    {
                        document.getElementById("range").innerHTML=newValue;
                    }
                </script>           
                    <br>
                    <br>
                <span class="rangetitle">Aldersgrense</span>
                <input name="alder" id="alder" type="range" min="18" max="26" value="18" step="1" onchange="visAlder(this.value)" />
                <span id="Alder">18</span><span>år</span>
                <script type="text/javascript">
                function visAlder(newValue)
                    {
                        document.getElementById("Alder").innerHTML=newValue;
                    }
                </script>
                    <br>
                    <br>
                <span class="rangetitle">Pris for øl</span>
                <input name="pris" id="pris" type="range" min="30" max="100" value="30" step="1" oninput="showValue(this.value)" />
                <span id="alderTeller">30</span><span>kr</span>
                <script type="text/javascript">
                function showValue(newValue)
                    {
                        document.getElementById("alderTeller").innerHTML=newValue;
                    }
                </script>
                <br>
                <br>
                <div id="jaNei">
                    <span class="rangetitle">Matservering</span> 
                    <input name="mat" id="mat" class="smallrange" type="range" min="0" max="1" value="0" step="1" onchange="visMatservering(this.value)" />
                    <span id="matyn">0</span>
                    <script type="text/javascript">
                    function visMatservering(newValue)
                        {
                            document.getElementById("matyn").innerHTML=newValue;
                        }
                    </script>
                    <br>
                    <br>
                    <span class="rangetitle">Studentrabatt</span> 
                    <input name="rabatt" id="rabatt" class="smallrange" type="range" min="0" max="1" value="0" step="1" onchange="visRabatt(this.value)" /> 
                    <span id="rabattyn">0</span>
                    <script type="text/javascript">
                    function visRabatt(newValue)
                        {
                            document.getElementById("rabattyn").innerHTML=newValue;
                        }
                    </script> 
                    <br>
                    <br>     
                </div>
                <br>
                <br>
                <button type="submit" class="button" >Submit</button>
            </form>
        </div>   
    </div>