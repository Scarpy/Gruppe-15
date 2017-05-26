<?php ?>
    <div id="sokContainer">
        <h2 id="sokeOverskrift"> FINN DEN BILLIGSTE ØLEN </h2>
        <div class="sokContainer-wrapper">  
            <form action="result.php" id="sokemeny">
                <input name="avstand" id="avstand" type="range" min="0" max="1000" value="0" step="100" onchange="visVerdi(this.value)" />
                <span id="range">0</span>
                <script type="text/javascript">
                function visVerdi(newValue)
                    {
                        document.getElementById("range").innerHTML=newValue;
                    }
                </script>           
                    <br>
                    <br>
               <input name="alder" id="alder" type="range" min="18" max="26" value="18" step="1" onchange="visAlder(this.value)" />
                <span id="Alder">0</span>
                <script type="text/javascript">
                function visAlder(newValue)
                    {
                        document.getElementById("Alder").innerHTML=newValue;
                    }
                </script>
                    <br>
                    <br>
               <input name="pris" id="pris" type="range" min="30" max="100" value="30" step="1" oninput="showValue(this.value)" />
                <span id="alderTeller">0</span>
                <script type="text/javascript">
                function showValue(newValue)
                    {
                        document.getElementById("alderTeller").innerHTML=newValue;
                    }
                </script>
                    <br>
                    <br>
                  <input name="apning" id="apning" type="range" min="0" max="3" value="0" step="1" onchange="visAapning(this.value)" />
                <span id="aapning">0</span>
                <script type="text/javascript">
                function visAapning(newValue)
                    {
                        document.getElementById("aapning").innerHTML=newValue;
                    }
                </script>
                <br>
                <br>
                <div id="jaNei">
                <span>Matservering </span> <input name="mat" id="mat" type="range" min="0" max="1" value="0" step="1" onchange="showValue(this.value)" />
                <br>
                <br>
                <span>Studentrabatt</span> <input name="rabatt" id="rabatt" type="range" min="0" max="1" value="0" step="1" />  
                <br>
                <br>     
                </div>
                <br>
                <br>
                <button type="submit" class="button" >Submit</button>
            </form>
        </div>   
    </div>