## General 
**Code:** `vita-net-chernovtsy_uah`  
**Method:** `vita-net-chernovtsy`  
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
: [en] Platinum ID  
: [uk] Платіжний ID  
: [ru] Платежный ID  
Hint:  
: [en] Platinum ID  
: [uk] Платіжний ID  
: [ru] Платежный ID  
## JSON Object 
```json
 {"code":"vita-net-chernovtsy_uah","method":"vita-net-chernovtsy","currency":"UAH","fields":[{"key":"client_id","type":"string","label":{"en":"Platinum ID","uk":"\u041f\u043b\u0430\u0442\u0456\u0436\u043d\u0438\u0439 ID","ru":"\u041f\u043b\u0430\u0442\u0435\u0436\u043d\u044b\u0439 ID"},"regexp":"\/^\\d{1,128}$\/","required":true,"position":1,"hint":{"en":"Platinum ID","uk":"\u041f\u043b\u0430\u0442\u0456\u0436\u043d\u0438\u0439 ID","ru":"\u041f\u043b\u0430\u0442\u0435\u0436\u043d\u044b\u0439 ID"},"example":"533332203"}],"amount_min":2,"amount_max":14999}```  
