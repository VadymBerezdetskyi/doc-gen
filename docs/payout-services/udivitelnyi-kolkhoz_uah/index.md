## General 
**Code:** `udivitelnyi-kolkhoz_uah`  
**Method:** `udivitelnyi-kolkhoz`  
**Currency:** `UAH` [show -->]() 
**Amount limits:** from `1`  to `4999`  UAH ## Fields 
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
: [en] Your nickname or ID  
: [uk] Ник или ID  
: [ru] Ник или ID  
Hint:  
: [en] Enter your nickname or ID  
: [uk] Введіть ник или ID  
: [ru] Введите ник или ID  
## JSON Object 
```json
 {"code":"udivitelnyi-kolkhoz_uah","method":"udivitelnyi-kolkhoz","currency":"UAH","fields":[{"key":"client_id","type":"string","label":{"en":"Your nickname or ID","uk":"\u041d\u0438\u043a \u0438\u043b\u0438 ID","ru":"\u041d\u0438\u043a \u0438\u043b\u0438 ID"},"regexp":"\/^(\\w|\\.| |\\-|\\+|@){1,128}$\/","required":true,"position":1,"hint":{"en":"Enter your nickname or ID","uk":"\u0412\u0432\u0435\u0434\u0456\u0442\u044c \u043d\u0438\u043a \u0438\u043b\u0438 ID","ru":"\u0412\u0432\u0435\u0434\u0438\u0442\u0435 \u043d\u0438\u043a \u0438\u043b\u0438 ID"},"example":"17594198"}],"amount_min":1,"amount_max":4999}```  
