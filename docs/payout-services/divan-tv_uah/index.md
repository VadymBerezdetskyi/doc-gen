## General 
**Code:** `divan-tv_uah`  
**Method:** `divan-tv`  
**Currency:** `UAH` [show -->]() 
**Amount limits:** from `2`  to `5000`  UAH ## Fields 
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
: [en] Login  
: [uk] Логін  
: [ru] Логин  
Hint:  
: [en] Login  
: [uk] Логін  
: [ru] Логин  
## JSON Object 
```json
 {"code":"divan-tv_uah","method":"divan-tv","currency":"UAH","fields":[{"key":"client_id","type":"string","label":{"en":"Login","uk":"\u041b\u043e\u0433\u0456\u043d","ru":"\u041b\u043e\u0433\u0438\u043d"},"regexp":"\/^\\d{1,128}$\/","required":true,"position":1,"hint":{"en":"Login","uk":"\u041b\u043e\u0433\u0456\u043d","ru":"\u041b\u043e\u0433\u0438\u043d"},"example":"759411"}],"amount_min":2,"amount_max":5000}```  
