# Pirmas PHP namų darbas


#### Klausimai
1\. Kodėl  "Nfq\Akademija\Soft\calculateHomeWorkSum(3, 2.2, ‘1’)" yra 6?

2\. Kas ir kodėl nutiko bandant kviesti:  "Nfq\Akademija\Strict\calculateHomeWorkSum(3, 2.2, ‘1’)"?

#### Atsakymai:
1\. Php automatiškai konvetuoja visus gautus kintamuosius į int, 
jei funkcijoje apibrėžiama, kad bus naudojami int tipo kintamieji. 
Šiuo atveju funkcijos input yra int, ir funkcijos output yra int:
 ```
 calculateHomeWorkSum(int...$numbers):int {}
  ```
Taigi:
 ```
 var_dump((int)3)
 var_dump((int)2.2) 
 var_dump((int)'1')
 
 #Result:
 #(int)3
 #(int)2
 #(int)1
 ```    
 Funkcija grąžina int, o suma ganama 3 + 2 + 1 = 6.     
    <br />
2\. Failas, kuriame yra nurodyta funkcija, turi apibrėžimą "strict_type = 1", todėl ją kviečiant turėtų būti metama klaida 
"fatal error" (funkcijos type hint yra int, o kviečiant paduodami string ir float tipų kintamieji).
 Tačiau kviečiant funkciją klaida nėra metama ir yra išspausdinamas int tipo rezultatas.
 Klaida nėra metama, kadangi funkcija yra iškviečiama iš kito failo, kuriame nėra įjungtas strict mode:
 >If a file without strict typing enabled makes a call to a function that was defined in a file with 
 strict typing, the caller's preference (weak typing) will be respected, and the value will be coerced.
 (Šaltinis: http://php.net/manual/en/functions.arguments.php#functions.arguments.type-declaration.strict)

## Papildomas klausimas iš Loose comparison
#### Paaiškinti kodėl:
```
var_dump('php' == 0)
var_dump(null == 0)
var_dump(null == 'php')

#Result
#bool(true)
#bool(true)
#bool(false)
 ```

#### Atsakymai

##### Kodėl var_dump('php' == 0) yra true:
Php lygindamas string su int, string konvertuojamas į int:

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

##### Kodėl var_dump(null == 0) yra true:
Jei vienas iš operandų yra null, o kitas - bet kas (šiuo atveju - skaičius), tuomet abi pusės konvertuojamos į bool:
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
#bool(true)
```

##### Kodėl var_dump(null == 'php') yra false:
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
