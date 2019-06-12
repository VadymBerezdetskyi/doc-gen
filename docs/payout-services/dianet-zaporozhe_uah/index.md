## General 
**Code:** `dianet-zaporozhe_uah`  
**Method:** `dianet-zaporozhe`  
**Currency:** `UAH` [show -->]() 
**Amount limits:** from `30`  to `10005`  UAH ## Fields 
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
: [en] Login  
: [uk] Логин  
: [ru] Логин  
Hint:  
: [en] Login  
: [uk] Логин  
: [ru] Логин  
## JSON Object 
```json
 {"code":"dianet-zaporozhe_uah","method":"dianet-zaporozhe","currency":"UAH","fields":[{"key":"client_id","type":"string","label":{"en":"Login","uk":"\u041b\u043e\u0433\u0438\u043d","ru":"\u041b\u043e\u0433\u0438\u043d"},"regexp":"\/^\\d{1,128}$\/","required":true,"position":1,"hint":{"en":"Login","uk":"\u041b\u043e\u0433\u0438\u043d","ru":"\u041b\u043e\u0433\u0438\u043d"},"example":"00501"}],"amount_min":30,"amount_max":10005}```  
