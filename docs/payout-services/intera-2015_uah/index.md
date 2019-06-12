## General 
**Code:** `intera-2015_uah`  
**Method:** `intera-2015`  
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
: [en] Platinum id  
: [uk] Платіжний ідентифікатор  
: [ru] Платежный id  
Hint:  
: [en] Platinum id  
: [uk] Платіжний ідентифікатор  
: [ru] Платежный id  
## JSON Object 
```json
 {"code":"intera-2015_uah","method":"intera-2015","currency":"UAH","fields":[{"key":"client_id","type":"string","label":{"en":"Platinum id","uk":"\u041f\u043b\u0430\u0442\u0456\u0436\u043d\u0438\u0439 \u0456\u0434\u0435\u043d\u0442\u0438\u0444\u0456\u043a\u0430\u0442\u043e\u0440","ru":"\u041f\u043b\u0430\u0442\u0435\u0436\u043d\u044b\u0439 id"},"regexp":"\/^\\d{1,128}$\/","required":true,"position":1,"hint":{"en":"Platinum id","uk":"\u041f\u043b\u0430\u0442\u0456\u0436\u043d\u0438\u0439 \u0456\u0434\u0435\u043d\u0442\u0438\u0444\u0456\u043a\u0430\u0442\u043e\u0440","ru":"\u041f\u043b\u0430\u0442\u0435\u0436\u043d\u044b\u0439 id"},"example":"107318513"}],"amount_min":2,"amount_max":14999}```  
