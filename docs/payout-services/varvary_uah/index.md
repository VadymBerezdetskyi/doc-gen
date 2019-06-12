## General 
**Code:** `varvary_uah`  
**Method:** `varvary`  
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
: [uk] Нік або ID  
: [ru] Ник или ID  
Hint:  
: [en] Enter your nickname or ID  
: [uk] Введіть нік або ID  
: [ru] Введите ник или ID  
## JSON Object 
```json
 {"code":"varvary_uah","method":"varvary","currency":"UAH","fields":[{"key":"client_id","type":"string","label":{"en":"Your nickname or ID","uk":"\u041d\u0456\u043a \u0430\u0431\u043e ID","ru":"\u041d\u0438\u043a \u0438\u043b\u0438 ID"},"regexp":"\/^(\\w|\\.| |\\-|\\+|@){1,128}$\/","required":true,"position":1,"hint":{"en":"Enter your nickname or ID","uk":"\u0412\u0432\u0435\u0434\u0456\u0442\u044c \u043d\u0456\u043a \u0430\u0431\u043e ID","ru":"\u0412\u0432\u0435\u0434\u0438\u0442\u0435 \u043d\u0438\u043a \u0438\u043b\u0438 ID"},"example":"\u0430\u0440\u0442\u0443\u0440\u043e"}],"amount_min":1,"amount_max":4999}```  
