## General 
**Code:** `ukrlink-grup-kiev_uah`  
**Method:** `ukrlink-grup-kiev`  
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
: [en] Platinum code  
: [uk] Платіжний код  
: [ru] Платижний код  
Hint:  
: [en] Platinum code  
: [uk] Платіжний код  
: [ru] Платижний код  
## JSON Object 
```json
 {"code":"ukrlink-grup-kiev_uah","method":"ukrlink-grup-kiev","currency":"UAH","fields":[{"key":"client_id","type":"string","label":{"en":"Platinum code","uk":"\u041f\u043b\u0430\u0442\u0456\u0436\u043d\u0438\u0439 \u043a\u043e\u0434","ru":"\u041f\u043b\u0430\u0442\u0438\u0436\u043d\u0438\u0439 \u043a\u043e\u0434"},"regexp":"\/^\\d{1,128}$\/","required":true,"position":1,"hint":{"en":"Platinum code","uk":"\u041f\u043b\u0430\u0442\u0456\u0436\u043d\u0438\u0439 \u043a\u043e\u0434","ru":"\u041f\u043b\u0430\u0442\u0438\u0436\u043d\u0438\u0439 \u043a\u043e\u0434"},"example":"420174"}],"amount_min":2,"amount_max":5000}```  
