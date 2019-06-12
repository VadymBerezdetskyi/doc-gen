## General 
**Code:** `okinet-kiev_uah`  
**Method:** `okinet-kiev`  
**Currency:** `UAH` [show -->]() 
**Amount limits:** from `5`  to `5000`  UAH ## Fields 
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
 {"code":"okinet-kiev_uah","method":"okinet-kiev","currency":"UAH","fields":[{"key":"client_id","type":"string","label":{"en":"Login","uk":"\u041b\u043e\u0433\u0456\u043d","ru":"\u041b\u043e\u0433\u0438\u043d"},"regexp":"\/^\\d{1,128}$\/","required":true,"position":1,"hint":{"en":"Login","uk":"\u041b\u043e\u0433\u0456\u043d","ru":"\u041b\u043e\u0433\u0438\u043d"},"example":"5333"}],"amount_min":5,"amount_max":5000}```  
