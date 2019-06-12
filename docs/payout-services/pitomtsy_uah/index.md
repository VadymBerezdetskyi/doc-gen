## General 
**Code:** `pitomtsy_uah`  
**Method:** `pitomtsy`  
**Currency:** `UAH` [show -->]() 
**Amount limits:** from `7`  to `4999`  UAH ## Fields 
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
: [en] ID, or nickname  
: [uk] ID або нік  
: [ru] ID или ник  
Hint:  
: [en] Enter ID, or nickname  
: [uk] Введіть ID або нік  
: [ru] Введите ID или ник  
## JSON Object 
```json
 {"code":"pitomtsy_uah","method":"pitomtsy","currency":"UAH","fields":[{"key":"client_id","type":"string","label":{"en":"ID, or nickname","uk":"ID \u0430\u0431\u043e \u043d\u0456\u043a","ru":"ID \u0438\u043b\u0438 \u043d\u0438\u043a"},"regexp":"\/^(\\w|\\.| |\\-|\\+|@){1,128}$\/","required":true,"position":1,"hint":{"en":"Enter ID, or nickname","uk":"\u0412\u0432\u0435\u0434\u0456\u0442\u044c ID \u0430\u0431\u043e \u043d\u0456\u043a","ru":"\u0412\u0432\u0435\u0434\u0438\u0442\u0435 ID \u0438\u043b\u0438 \u043d\u0438\u043a"},"example":"10638190"}],"amount_min":7,"amount_max":4999}```  
