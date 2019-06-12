## General 
**Code:** `c-t-net-chernovtsy_uah`  
**Method:** `c-t-net-chernovtsy`  
**Currency:** `UAH` [show -->]() 
**Amount limits:** from `2`  to `14999`  UAH ## Fields 
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
: [en] User ID  
: [uk] User ID  
: [ru] User ID  
Hint:  
: [en] Enter User ID  
: [uk] Введіть User ID  
: [ru] Введите User ID  
## JSON Object 
```json
 {"code":"c-t-net-chernovtsy_uah","method":"c-t-net-chernovtsy","currency":"UAH","fields":[{"key":"client_id","type":"string","label":{"en":"User ID","uk":"User ID","ru":"User ID"},"regexp":"\/^(\\w|\\.| |\\-|\\+|@){1,128}$\/","required":true,"position":1,"hint":{"en":"Enter User ID","uk":"\u0412\u0432\u0435\u0434\u0456\u0442\u044c User ID","ru":"\u0412\u0432\u0435\u0434\u0438\u0442\u0435 User ID"},"example":"1633"}],"amount_min":2,"amount_max":14999}```  
