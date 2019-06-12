## General 
**Code:** `nuk-im-adm-makarova-splata-za-navchannia-poslugi-z-oformlennia-dokumentiv-pro-osvitu_uah`  
**Method:** `nuk-im-adm-makarova-splata-za-navchannia-poslugi-z-oformlennia-dokumentiv-pro-osvitu`  
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
: [en] PIB # Dodatkova Information  
: [uk] ПIБ # Додаткова iнформацiя  
: [ru] ФИО # Дополнительная информация  
Hint:  
: [en] PIB # Dodatkova Information  
: [uk] ПIБ # Додаткова iнформацiя  
: [ru] ФИО # Дополнительная информация  
## JSON Object 
```json
 {"code":"nuk-im-adm-makarova-splata-za-navchannia-poslugi-z-oformlennia-dokumentiv-pro-osvitu_uah","method":"nuk-im-adm-makarova-splata-za-navchannia-poslugi-z-oformlennia-dokumentiv-pro-osvitu","currency":"UAH","fields":[{"key":"client_id","type":"string","label":{"en":"PIB # Dodatkova Information","uk":"\u041fI\u0411 # \u0414\u043e\u0434\u0430\u0442\u043a\u043e\u0432\u0430 i\u043d\u0444\u043e\u0440\u043c\u0430\u0446i\u044f","ru":"\u0424\u0418\u041e # \u0414\u043e\u043f\u043e\u043b\u043d\u0438\u0442\u0435\u043b\u044c\u043d\u0430\u044f \u0438\u043d\u0444\u043e\u0440\u043c\u0430\u0446\u0438\u044f"},"regexp":"\/^(\\w|\\.| |\\-|\\+|@){1,128}$\/","required":true,"position":1,"hint":{"en":"PIB # Dodatkova Information","uk":"\u041fI\u0411 # \u0414\u043e\u0434\u0430\u0442\u043a\u043e\u0432\u0430 i\u043d\u0444\u043e\u0440\u043c\u0430\u0446i\u044f","ru":"\u0424\u0418\u041e # \u0414\u043e\u043f\u043e\u043b\u043d\u0438\u0442\u0435\u043b\u044c\u043d\u0430\u044f \u0438\u043d\u0444\u043e\u0440\u043c\u0430\u0446\u0438\u044f"},"example":"\u041f\u0435\u0442\u0440\u043e\u0432 \u0410.\u0410.#\u0421\u043f\u043b\u0430\u0442\u0430 \u0437\u0430 \u0434\u0438\u043f\u043b\u043e\u043c \u2116\u041f\u041f 215555"}],"amount_min":2,"amount_max":14999}```  
