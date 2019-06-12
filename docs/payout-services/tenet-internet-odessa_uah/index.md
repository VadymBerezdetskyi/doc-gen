## General 
**Code:** `tenet-internet-odessa_uah`  
**Method:** `tenet-internet-odessa`  
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
: [en] Special Rahunok  
: [uk] Особовий рахунок  
: [ru] Особовий рахунок  
Hint:  
: [en] Special Rahunok  
: [uk] Особовий рахунок  
: [ru] Особовий рахунок  
## JSON Object 
```json
 {"code":"tenet-internet-odessa_uah","method":"tenet-internet-odessa","currency":"UAH","fields":[{"key":"client_id","type":"string","label":{"en":"Special Rahunok","uk":"\u041e\u0441\u043e\u0431\u043e\u0432\u0438\u0439 \u0440\u0430\u0445\u0443\u043d\u043e\u043a","ru":"\u041e\u0441\u043e\u0431\u043e\u0432\u0438\u0439 \u0440\u0430\u0445\u0443\u043d\u043e\u043a"},"regexp":"\/^\\d{1,128}$\/","required":true,"position":1,"hint":{"en":"Special Rahunok","uk":"\u041e\u0441\u043e\u0431\u043e\u0432\u0438\u0439 \u0440\u0430\u0445\u0443\u043d\u043e\u043a","ru":"\u041e\u0441\u043e\u0431\u043e\u0432\u0438\u0439 \u0440\u0430\u0445\u0443\u043d\u043e\u043a"},"example":"100939"}],"amount_min":5,"amount_max":5000}```  
