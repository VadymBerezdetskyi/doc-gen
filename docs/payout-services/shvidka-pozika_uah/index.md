## General 
**Code:** `shvidka-pozika_uah`  
**Method:** `shvidka-pozika`  
**Currency:** `UAH` [show -->]() 
**Amount limits:** from `2`  to `14999`  UAH ## Fields 
### Overview 
|Key|Required|Type|Regexp| 
|:---:|:---:|:---:|:---:| 
|`client_id` |✔ |`string` |`/^(\w|\.| |\-|\+|@){1,128}$/` | 
 
### Details 
0 **`client_id` **  
Type: `string`  
Regexp: `/^(\w|\.| |\-|\+|@){1,128}$/`  
Required: `1`  
Label:  
: [en] Contract number # Date of birth # Phone  
: [uk] Номер договору # Дата народження # Телефон  
: [ru] Номер договора # Дата рождения # Телефон  
Hint:  
: [en] Contract number # Date of birth # Phone  
: [uk] Номер договору # Дата народження # Телефон  
: [ru] Номер договора # Дата рождения # Телефон  
## JSON Object 
```json
 {"code":"shvidka-pozika_uah","method":"shvidka-pozika","currency":"UAH","fields":[{"key":"client_id","type":"string","label":{"en":"Contract number # Date of birth # Phone","uk":"\u041d\u043e\u043c\u0435\u0440 \u0434\u043e\u0433\u043e\u0432\u043e\u0440\u0443 # \u0414\u0430\u0442\u0430 \u043d\u0430\u0440\u043e\u0434\u0436\u0435\u043d\u043d\u044f # \u0422\u0435\u043b\u0435\u0444\u043e\u043d","ru":"\u041d\u043e\u043c\u0435\u0440 \u0434\u043e\u0433\u043e\u0432\u043e\u0440\u0430 # \u0414\u0430\u0442\u0430 \u0440\u043e\u0436\u0434\u0435\u043d\u0438\u044f # \u0422\u0435\u043b\u0435\u0444\u043e\u043d"},"regexp":"\/^(\\w|\\.| |\\-|\\+|@){1,128}$\/","required":true,"position":1,"hint":{"en":"Contract number # Date of birth # Phone","uk":"\u041d\u043e\u043c\u0435\u0440 \u0434\u043e\u0433\u043e\u0432\u043e\u0440\u0443 # \u0414\u0430\u0442\u0430 \u043d\u0430\u0440\u043e\u0434\u0436\u0435\u043d\u043d\u044f # \u0422\u0435\u043b\u0435\u0444\u043e\u043d","ru":"\u041d\u043e\u043c\u0435\u0440 \u0434\u043e\u0433\u043e\u0432\u043e\u0440\u0430 # \u0414\u0430\u0442\u0430 \u0440\u043e\u0436\u0434\u0435\u043d\u0438\u044f # \u0422\u0435\u043b\u0435\u0444\u043e\u043d"},"example":"0091-21\/2017#28.02.1999#0505555555"}],"amount_min":2,"amount_max":14999}```  
