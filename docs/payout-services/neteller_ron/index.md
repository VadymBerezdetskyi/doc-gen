## General 
**Code:** `neteller_ron`  
**Method:** `neteller`  
**Currency:** `RON` [show -->]() 
**Amount limits:** from `1`  to `50000`  RON ## Fields 
### Overview 
|Key|Required|Type|Regexp| 
|:---:|:---:|:---:|:---:| 
|`email` |✔ |`string` |`/^[_a-zA-Z0-9-]+(\.[_a-zA-Z0-9-]+)*@[a-zA-Z0-9-]+(\.[a-zA-Z0-9-]+)*(\.[a-zA-Z]{2,3})$/` | 
 
### Details 
0 **`email` **  
Type: `string`  
Regexp: `/^[_a-zA-Z0-9-]+(\.[_a-zA-Z0-9-]+)*@[a-zA-Z0-9-]+(\.[a-zA-Z0-9-]+)*(\.[a-zA-Z]{2,3})$/`  
Required: `1`  
Label:  
: [en] Email  
: [ru] Email  
: [uk] Email  
Hint:  
: [en] Enter the recipient's email address  
: [ru] Введите Email получателя  
: [uk] Введiть Email отримувача  
## JSON Object 
```json
 {"code":"neteller_ron","method":"neteller","currency":"RON","fields":[{"key":"email","type":"string","label":{"en":"Email","ru":"Email","uk":"Email"},"hint":{"en":"Enter the recipient's email address","ru":"\u0412\u0432\u0435\u0434\u0438\u0442\u0435 Email \u043f\u043e\u043b\u0443\u0447\u0430\u0442\u0435\u043b\u044f","uk":"\u0412\u0432\u0435\u0434i\u0442\u044c Email \u043e\u0442\u0440\u0438\u043c\u0443\u0432\u0430\u0447\u0430"},"regexp":"\/^[_a-zA-Z0-9-]+(\\.[_a-zA-Z0-9-]+)*@[a-zA-Z0-9-]+(\\.[a-zA-Z0-9-]+)*(\\.[a-zA-Z]{2,3})$\/","required":true,"position":1}],"amount_min":1,"amount_max":50000}```  
