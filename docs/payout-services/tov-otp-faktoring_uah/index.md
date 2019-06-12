## General 
**Code:** `tov-otp-faktoring_uah`  
**Method:** `tov-otp-faktoring`  
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
: [en] Case number  
: [ru] Номер дела  
: [uk] Номер справи  
Hint:  
: [en] Case number  
: [ru] Номер дела  
: [uk] Номер справи  
## JSON Object 
```json
 {"code":"tov-otp-faktoring_uah","method":"tov-otp-faktoring","currency":"UAH","fields":[{"key":"client_id","type":"string","label":{"en":"Case number","ru":"\u041d\u043e\u043c\u0435\u0440 \u0434\u0435\u043b\u0430","uk":"\u041d\u043e\u043c\u0435\u0440 \u0441\u043f\u0440\u0430\u0432\u0438"},"regexp":"\/^\\d{1,128}$\/","required":true,"position":1,"hint":{"en":"Case number","ru":"\u041d\u043e\u043c\u0435\u0440 \u0434\u0435\u043b\u0430","uk":"\u041d\u043e\u043c\u0435\u0440 \u0441\u043f\u0440\u0430\u0432\u0438"},"example":"136003020"}],"amount_min":2,"amount_max":14999}```  
