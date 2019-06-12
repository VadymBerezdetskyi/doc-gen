## General 
**Code:** `n-line-kiev_uah`  
**Method:** `n-line-kiev`  
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
: [en] Personal rakhunok  
: [uk] Персональний рахунок  
: [ru] Персональний рахунок  
Hint:  
: [en] Personal rakhunok  
: [uk] Персональний рахунок  
: [ru] Персональний рахунок  
## JSON Object 
```json
 {"code":"n-line-kiev_uah","method":"n-line-kiev","currency":"UAH","fields":[{"key":"client_id","type":"string","label":{"en":"Personal rakhunok","uk":"\u041f\u0435\u0440\u0441\u043e\u043d\u0430\u043b\u044c\u043d\u0438\u0439 \u0440\u0430\u0445\u0443\u043d\u043e\u043a","ru":"\u041f\u0435\u0440\u0441\u043e\u043d\u0430\u043b\u044c\u043d\u0438\u0439 \u0440\u0430\u0445\u0443\u043d\u043e\u043a"},"regexp":"\/^\\d{1,128}$\/","required":true,"position":1,"hint":{"en":"Personal rakhunok","uk":"\u041f\u0435\u0440\u0441\u043e\u043d\u0430\u043b\u044c\u043d\u0438\u0439 \u0440\u0430\u0445\u0443\u043d\u043e\u043a","ru":"\u041f\u0435\u0440\u0441\u043e\u043d\u0430\u043b\u044c\u043d\u0438\u0439 \u0440\u0430\u0445\u0443\u043d\u043e\u043a"},"example":"183590"}],"amount_min":2,"amount_max":14999}```  
