## General 
**Code:** `atom-fishing-ekstrim_uah`  
**Method:** `atom-fishing-ekstrim`  
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
: [en] Referral number  
: [uk] Реферальний номер  
: [ru] Реферальный номер  
Hint:  
: [en] Enter referral number  
: [uk] Введіть реферальний номер  
: [ru] Введите реферальный номер  
## JSON Object 
```json
 {"code":"atom-fishing-ekstrim_uah","method":"atom-fishing-ekstrim","currency":"UAH","fields":[{"key":"client_id","type":"string","label":{"en":"Referral number","uk":"\u0420\u0435\u0444\u0435\u0440\u0430\u043b\u044c\u043d\u0438\u0439 \u043d\u043e\u043c\u0435\u0440","ru":"\u0420\u0435\u0444\u0435\u0440\u0430\u043b\u044c\u043d\u044b\u0439 \u043d\u043e\u043c\u0435\u0440"},"regexp":"\/^(\\w|\\.| |\\-|\\+|@){1,128}$\/","required":true,"position":1,"hint":{"en":"Enter referral number","uk":"\u0412\u0432\u0435\u0434\u0456\u0442\u044c \u0440\u0435\u0444\u0435\u0440\u0430\u043b\u044c\u043d\u0438\u0439 \u043d\u043e\u043c\u0435\u0440","ru":"\u0412\u0432\u0435\u0434\u0438\u0442\u0435 \u0440\u0435\u0444\u0435\u0440\u0430\u043b\u044c\u043d\u044b\u0439 \u043d\u043e\u043c\u0435\u0440"}}],"amount_min":7,"amount_max":4999}```  
