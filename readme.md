# Pirmas PHP namų darbas


##Klausimai
1. Kodėl  "Nfq\Akademija\Soft\calculateHomeWorkSum(3, 2.2, ‘1’)" yra 6?

2. Kas ir kodėl nutiko bandant kviesti:  "Nfq\Akademija\Strict\calculateHomeWorkSum(3, 2.2, ‘1’)"?

#####Atsakymai:
1.
2.

##Papildomas kalusimas iš Loose comparison
Paaiškinti kodėl:
```
var_dump('php' == 0)
var_dump(0 == null)
var_dump(null == 'php')

#Result
#bool(true)
#bool(true)
#bool(false)
```

####Atsakymai

#####Kodėl var_dump('php' == 0) yra true:
Php lygindamas int su string, string konvertuojamas į int:

>"If you compare a number with a string or the comparison involves numerical strings, then each string is converted to a number and the comparison performed numerically. "   
(Šaltinis: http://php.net/manual/en/language.operators.comparison.php)


Taigi:
```
var_dump((int)'php')

#Result
#int(0)
```
Gauname:
```
var_dump(0 == 0)

#Result
#bool(true)
```

#####Kodėl var_dump(0 == null) yra true:
Jei pirmas operandas yra null, o antras bet kas (šiuo atveju - skaičius), tuomet abi pusės konvertuojamos į bool:
>Operand 1: bool or null     
Operand 2:	anything    	
Result: Convert both sides to bool, FALSE < TRUE     
(Šaltinis: http://php.net/manual/en/language.operators.comparison.php)

Taigi konevrtuojame:
```
var_dump((bool)null)
var_dump((bool)0)

#Result
#bool(false)
#bool(false)
```
Lyginime:
```
var_dump(false == false)

#Result
#bool(false)
```

#####Kodėl var_dump(null == 'php') yra false:
Jei vienas iš operandų yra null, o kitas string, null konvertuojamas į "":
>Operand 1: null or string   
Operand 2:	string	   
Result: Convert NULL to "", numerical or lexical comparison   
(Šaltinis: http://php.net/manual/en/language.operators.comparison.php)

Lyginame:
```
var_dump(null == 'php')
```
Konvertuojama ir gaunama:
```
var_dump('' == 'php')

#Result
#bool(false)
```
