## General 
**Code:** `pivnichline-rovnenskaia-obl_uah`  
**Method:** `pivnichline-rovnenskaia-obl`  
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
: [en] Payment Code  
: [uk] Платіжний код  
: [ru] Платёжный код  
Hint:  
: [en] Payment Code  
: [uk] Платіжний код  
: [ru] Платёжный код  
## JSON Object 
```json
 {"code":"pivnichline-rovnenskaia-obl_uah","method":"pivnichline-rovnenskaia-obl","currency":"UAH","fields":[{"key":"client_id","type":"string","label":{"en":"Payment Code","uk":"\u041f\u043b\u0430\u0442\u0456\u0436\u043d\u0438\u0439 \u043a\u043e\u0434","ru":"\u041f\u043b\u0430\u0442\u0451\u0436\u043d\u044b\u0439 \u043a\u043e\u0434"},"regexp":"\/^\\d{1,128}$\/","required":true,"position":1,"hint":{"en":"Payment Code","uk":"\u041f\u043b\u0430\u0442\u0456\u0436\u043d\u0438\u0439 \u043a\u043e\u0434","ru":"\u041f\u043b\u0430\u0442\u0451\u0436\u043d\u044b\u0439 \u043a\u043e\u0434"},"example":"55"}],"amount_min":2,"amount_max":14999}```  
