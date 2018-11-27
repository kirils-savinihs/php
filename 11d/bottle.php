<?php
/*
Izveidot klasi, kura reprezentē ūdens pudeles bāzes uzvedību.

Izveidot klasi ‘Bottle’ ar laukiem ‘tilpums’, ‘maksimālai tilpums’, ‘saturs’, konstruktoru, īpašību izvadīšanas
metodi (piem. - Print), un 2 metodēm – ieliet un izliet (fill & pour) škidrumu. 

Ieliet un izliet metodēs realizē ‘tilpuma’ vērtības izmaiņas – palielināšana un samazināšana,
kā arī pārbaudes – vai pudele pārpildās, vai ir pavisam tukša, ar izņēmumu (exception) izsaukšanu. 
Konstruktorā arī realizē pārbaudi uz pārpildīšanu, izmantojot izņēmumus (exception). 
Galvenā skriptā izveidot objektu, pārbaudīt un demonstrēt visas objekta metodes, 
kā arī ielikt visas pārbaudes ‘try...catch’ blokā, lai noķertu iespējamus ‘izņēmumus’. 
Klases kodu pārvietot atsevišķā failā.
*/

class bottle
{
        var $vol;
        var $maxvol;
        var $content;

        function bottle($new_vol,$new_maxvol,$new_content)
        {
                if ($new_vol>$new_maxvol)
                {
                        throw new Exception("Impossible Bottle: Volume ($new_vol) is > than Max Volume ($new_maxvol) <br>");
                }
                if ($new_vol<0)
                {
                        throw new Exception("Impossible Bottle: Volume ($new_vol) is < 0<br>");
                }
                if ($new_maxvol<=0)
                {
                        throw new Exception("Impossible Bottle: Max Volume ($new_maxvol) is <= 0<br>");
                }

                $this->vol=$new_vol;
                $this->maxvol=$new_maxvol;
                $this->content=$new_content;
        }

        function print()
        {
                echo    "\nBottle contains $this->content  ($this->vol / $this->maxvol L)<br>";
        }

        function pour()
        {
                if ($this->vol==0)
                {
                        throw new Exception("Bottle already empty<br>");
                }

                $this->vol = $this->vol - 0.1*$this->maxvol;

                if ($this->vol <0)
                {
                        $this->vol = 0;
                }
                echo "Bottle poured<br>";
        }

        function fill()
        {
                if ($this->vol == $this->maxvol)
                {
                        throw new Exception("Bottle already full<br>");
                }

                $this->vol = $this->maxvol;
                echo "Bottle filled<br>";
        }

}



?>