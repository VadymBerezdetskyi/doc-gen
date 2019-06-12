## General 
**Code:** `11-x-11_uah`  
**Method:** `11-x-11`  
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
: [en] Nickname  
: [uk] Нік  
: [ru] Ник  
Hint:  
: [en] Enter nickname  
: [uk] Введіть нік  
: [ru] Введите ник  
## JSON Object 
```json
 {"code":"11-x-11_uah","method":"11-x-11","currency":"UAH","fields":[{"key":"client_id","type":"string","label":{"en":"Nickname","uk":"\u041d\u0456\u043a","ru":"\u041d\u0438\u043a"},"regexp":"\/^(\\w|\\.| |\\-|\\+|@){1,128}$\/","required":true,"position":1,"hint":{"en":"Enter nickname","uk":"\u0412\u0432\u0435\u0434\u0456\u0442\u044c \u043d\u0456\u043a","ru":"\u0412\u0432\u0435\u0434\u0438\u0442\u0435 \u043d\u0438\u043a"},"example":"EPISKOP"}],"amount_min":1,"amount_max":4999}```  
