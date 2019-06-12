## General 
**Code:** `favorit-sport_uah`  
**Method:** `favorit-sport`  
**Currency:** `UAH` [show -->]() 
**Amount limits:** from `10`  to `5000`  UAH ## Fields 
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
: [en] User account number  
: [uk] Номер призначеного для користувача аккаунта  
: [ru] Номер пользовательского аккаунта  
Hint:  
: [en] User account number  
: [uk] Номер призначеного для користувача аккаунта  
: [ru] Номер пользовательского аккаунта  
## JSON Object 
```json
 {"code":"favorit-sport_uah","method":"favorit-sport","currency":"UAH","fields":[{"key":"client_id","type":"string","label":{"en":"User account number","uk":"\u041d\u043e\u043c\u0435\u0440 \u043f\u0440\u0438\u0437\u043d\u0430\u0447\u0435\u043d\u043e\u0433\u043e \u0434\u043b\u044f \u043a\u043e\u0440\u0438\u0441\u0442\u0443\u0432\u0430\u0447\u0430 \u0430\u043a\u043a\u0430\u0443\u043d\u0442\u0430","ru":"\u041d\u043e\u043c\u0435\u0440 \u043f\u043e\u043b\u044c\u0437\u043e\u0432\u0430\u0442\u0435\u043b\u044c\u0441\u043a\u043e\u0433\u043e \u0430\u043a\u043a\u0430\u0443\u043d\u0442\u0430"},"regexp":"\/^\\d{1,128}$\/","required":true,"position":1,"hint":{"en":"User account number","uk":"\u041d\u043e\u043c\u0435\u0440 \u043f\u0440\u0438\u0437\u043d\u0430\u0447\u0435\u043d\u043e\u0433\u043e \u0434\u043b\u044f \u043a\u043e\u0440\u0438\u0441\u0442\u0443\u0432\u0430\u0447\u0430 \u0430\u043a\u043a\u0430\u0443\u043d\u0442\u0430","ru":"\u041d\u043e\u043c\u0435\u0440 \u043f\u043e\u043b\u044c\u0437\u043e\u0432\u0430\u0442\u0435\u043b\u044c\u0441\u043a\u043e\u0433\u043e \u0430\u043a\u043a\u0430\u0443\u043d\u0442\u0430"},"example":"1282540"}],"amount_min":10,"amount_max":5000}```  
