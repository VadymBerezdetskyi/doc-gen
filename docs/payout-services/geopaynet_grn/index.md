## General 
**Code:** `geopaynet_grn`  
**Method:** `geopaynet`  
**Currency:** `GRN` [show -->]() 
**Amount limits:** from `0.01`  to `100000`  GRN ## Fields 
### Overview 
|Key|Required|Type|Regexp| 
|:---:|:---:|:---:|:---:| 
|`user_id` |✔ |`string` |`/^[a-f0-9]{64}$/` | 
 
### Details 
0 **`user_id` **  
Type: `string`  
Regexp: `/^[a-f0-9]{64}$/`  
Required: `1`  
Label:  
: [en] User ID  
: [ru] ID користувача  
: [uk] ID пользователя  
Hint:  
: [en] Enter GEO User ID  
: [ru] Введите GEO ID пользователя  
: [uk] Введіть GEO ID користувача  
## JSON Object 
```json
 {"code":"geopaynet_grn","method":"geopaynet","currency":"GRN","fields":[{"key":"user_id","type":"string","label":{"en":"User ID","ru":"ID \u043a\u043e\u0440\u0438\u0441\u0442\u0443\u0432\u0430\u0447\u0430","uk":"ID \u043f\u043e\u043b\u044c\u0437\u043e\u0432\u0430\u0442\u0435\u043b\u044f"},"hint":{"en":"Enter GEO User ID","ru":"\u0412\u0432\u0435\u0434\u0438\u0442\u0435 GEO ID \u043f\u043e\u043b\u044c\u0437\u043e\u0432\u0430\u0442\u0435\u043b\u044f","uk":"\u0412\u0432\u0435\u0434\u0456\u0442\u044c GEO ID \u043a\u043e\u0440\u0438\u0441\u0442\u0443\u0432\u0430\u0447\u0430"},"regexp":"\/^[a-f0-9]{64}$\/","required":true,"position":1}],"amount_min":0.01,"amount_max":100000}```  
