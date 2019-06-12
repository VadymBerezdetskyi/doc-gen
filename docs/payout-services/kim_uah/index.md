## General 
**Code:** `kim_uah`  
**Method:** `kim`  
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
: [en] Personal account  
: [uk] Особовий рахунок  
: [ru] Личный счет  
Hint:  
: [en] Personal account  
: [uk] Особовий рахунок  
: [ru] Личный счет  
## JSON Object 
```json
 {"code":"kim_uah","method":"kim","currency":"UAH","fields":[{"key":"client_id","type":"string","label":{"en":"Personal account","uk":"\u041e\u0441\u043e\u0431\u043e\u0432\u0438\u0439 \u0440\u0430\u0445\u0443\u043d\u043e\u043a","ru":"\u041b\u0438\u0447\u043d\u044b\u0439 \u0441\u0447\u0435\u0442"},"regexp":"\/^\\d{1,128}$\/","required":true,"position":1,"hint":{"en":"Personal account","uk":"\u041e\u0441\u043e\u0431\u043e\u0432\u0438\u0439 \u0440\u0430\u0445\u0443\u043d\u043e\u043a","ru":"\u041b\u0438\u0447\u043d\u044b\u0439 \u0441\u0447\u0435\u0442"},"example":"57007899"}],"amount_min":2,"amount_max":14999}```  
