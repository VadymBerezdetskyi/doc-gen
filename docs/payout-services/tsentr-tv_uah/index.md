## General 
**Code:** `tsentr-tv_uah`  
**Method:** `tsentr-tv`  
**Currency:** `UAH` [show -->]() 
**Amount limits:** from `10`  to `14999`  UAH ## Fields 
### Overview 
|Key|Required|Type|Regexp| 
|:---:|:---:|:---:|:---:| 
|`client_id` |✔ |`string` |`/^(\w|\.| |\-|\+|@){1,128}$/` | 
 
### Details 
0 **`client_id` **  
Type: `string`  
Regexp: `/^(\w|\.| |\-|\+|@){1,128}$/`  
Required: `1`  
Label:  
: [en] ID  
: [uk] ID  
: [ru] ID  
Hint:  
: [en] Enter ID  
: [uk] Введіть ID  
: [ru] Введите ID  
## JSON Object 
```json
 {"code":"tsentr-tv_uah","method":"tsentr-tv","currency":"UAH","fields":[{"key":"client_id","type":"string","label":{"en":"ID","uk":"ID","ru":"ID"},"regexp":"\/^(\\w|\\.| |\\-|\\+|@){1,128}$\/","required":true,"position":1,"hint":{"en":"Enter ID","uk":"\u0412\u0432\u0435\u0434\u0456\u0442\u044c ID","ru":"\u0412\u0432\u0435\u0434\u0438\u0442\u0435 ID"},"example":"9172"}],"amount_min":10,"amount_max":14999}```  
