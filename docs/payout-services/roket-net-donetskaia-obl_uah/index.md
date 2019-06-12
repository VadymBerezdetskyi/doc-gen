## General 
**Code:** `roket-net-donetskaia-obl_uah`  
**Method:** `roket-net-donetskaia-obl`  
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
: [ru] Платижний идентификатор  
Hint:  
: [en] Platinum ID  
: [uk] Платіжний ID  
: [ru] Платижний идентификатор  
## JSON Object 
```json
 {"code":"roket-net-donetskaia-obl_uah","method":"roket-net-donetskaia-obl","currency":"UAH","fields":[{"key":"client_id","type":"string","label":{"en":"Platinum ID","uk":"\u041f\u043b\u0430\u0442\u0456\u0436\u043d\u0438\u0439 ID","ru":"\u041f\u043b\u0430\u0442\u0438\u0436\u043d\u0438\u0439 \u0438\u0434\u0435\u043d\u0442\u0438\u0444\u0438\u043a\u0430\u0442\u043e\u0440"},"regexp":"\/^\\d{1,128}$\/","required":true,"position":1,"hint":{"en":"Platinum ID","uk":"\u041f\u043b\u0430\u0442\u0456\u0436\u043d\u0438\u0439 ID","ru":"\u041f\u043b\u0430\u0442\u0438\u0436\u043d\u0438\u0439 \u0438\u0434\u0435\u043d\u0442\u0438\u0444\u0438\u043a\u0430\u0442\u043e\u0440"},"example":"3232254884"}],"amount_min":2,"amount_max":14999}```  
