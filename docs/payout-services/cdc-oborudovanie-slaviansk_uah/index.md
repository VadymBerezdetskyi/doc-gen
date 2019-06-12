## General 
**Code:** `cdc-oborudovanie-slaviansk_uah`  
**Method:** `cdc-oborudovanie-slaviansk`  
**Currency:** `UAH` [show -->]() 
**Amount limits:** from `2`  to `14999`  UAH ## Fields 
### Overview 
|Key|Required|Type|Regexp| 
|:---:|:---:|:---:|:---:| 
|`client_id` |✔ |`string` |`/^\d{1,128}$/` | 
 
### Details 
0 **`client_id` **  
Type: `string`  
Regexp: `/^\d{1,128}$/`  
Required: `1`  
Label:  
: [en] Property Code  
: [uk] Код обладнання  
: [ru] Код оборудования  
Hint:  
: [en] Property Code  
: [uk] Код обладнання  
: [ru] Код оборудования  
## JSON Object 
```json
 {"code":"cdc-oborudovanie-slaviansk_uah","method":"cdc-oborudovanie-slaviansk","currency":"UAH","fields":[{"key":"client_id","type":"string","label":{"en":"Property Code","uk":"\u041a\u043e\u0434 \u043e\u0431\u043b\u0430\u0434\u043d\u0430\u043d\u043d\u044f","ru":"\u041a\u043e\u0434 \u043e\u0431\u043e\u0440\u0443\u0434\u043e\u0432\u0430\u043d\u0438\u044f"},"regexp":"\/^\\d{1,128}$\/","required":true,"position":1,"hint":{"en":"Property Code","uk":"\u041a\u043e\u0434 \u043e\u0431\u043b\u0430\u0434\u043d\u0430\u043d\u043d\u044f","ru":"\u041a\u043e\u0434 \u043e\u0431\u043e\u0440\u0443\u0434\u043e\u0432\u0430\u043d\u0438\u044f"},"example":"1016"}],"amount_min":2,"amount_max":14999}```  
