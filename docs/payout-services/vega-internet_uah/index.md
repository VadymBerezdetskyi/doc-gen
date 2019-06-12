## General 
**Code:** `vega-internet_uah`  
**Method:** `vega-internet`  
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
: [en] Facebook  
: [uk] Особистий рахунок  
: [ru] Лицевой счет  
Hint:  
: [en] Facebook  
: [uk] Особистий рахунок  
: [ru] Лицевой счет  
## JSON Object 
```json
 {"code":"vega-internet_uah","method":"vega-internet","currency":"UAH","fields":[{"key":"client_id","type":"string","label":{"en":"Facebook","uk":"\u041e\u0441\u043e\u0431\u0438\u0441\u0442\u0438\u0439 \u0440\u0430\u0445\u0443\u043d\u043e\u043a","ru":"\u041b\u0438\u0446\u0435\u0432\u043e\u0439 \u0441\u0447\u0435\u0442"},"regexp":"\/^\\d{1,128}$\/","required":true,"position":1,"hint":{"en":"Facebook","uk":"\u041e\u0441\u043e\u0431\u0438\u0441\u0442\u0438\u0439 \u0440\u0430\u0445\u0443\u043d\u043e\u043a","ru":"\u041b\u0438\u0446\u0435\u0432\u043e\u0439 \u0441\u0447\u0435\u0442"},"example":"856292"}],"amount_min":2,"amount_max":14999}```  
