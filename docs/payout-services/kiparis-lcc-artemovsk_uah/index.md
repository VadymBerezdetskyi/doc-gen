## General 
**Code:** `kiparis-lcc-artemovsk_uah`  
**Method:** `kiparis-lcc-artemovsk`  
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
: [en] PIB # Addresses  
: [uk] ПIБ # Адреса  
: [ru] ПIБ # Адреса  
Hint:  
: [en] PIB # Addresses  
: [uk] ПIБ # Адреса  
: [ru] ПIБ # Адреса  
## JSON Object 
```json
 {"code":"kiparis-lcc-artemovsk_uah","method":"kiparis-lcc-artemovsk","currency":"UAH","fields":[{"key":"client_id","type":"string","label":{"en":"PIB # Addresses","uk":"\u041fI\u0411 # \u0410\u0434\u0440\u0435\u0441\u0430","ru":"\u041fI\u0411 # \u0410\u0434\u0440\u0435\u0441\u0430"},"regexp":"\/^(\\w|\\.| |\\-|\\+|@){1,128}$\/","required":true,"position":1,"hint":{"en":"PIB # Addresses","uk":"\u041fI\u0411 # \u0410\u0434\u0440\u0435\u0441\u0430","ru":"\u041fI\u0411 # \u0410\u0434\u0440\u0435\u0441\u0430"},"example":"\u0411\u0430\u043d\u0434\u0435\u0440\u0430 \u0421#\u043c. \u0425\u0430\u0440\u043ai\u0432, \u0432\u0443\u043b. \u041d\u043e\u0432\u0430 12\/5"}],"amount_min":2,"amount_max":14999}```  
