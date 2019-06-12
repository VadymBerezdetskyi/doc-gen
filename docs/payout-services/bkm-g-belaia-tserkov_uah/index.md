## General 
**Code:** `bkm-g-belaia-tserkov_uah`  
**Method:** `bkm-g-belaia-tserkov`  
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
: [en] Your phone number or login  
: [uk] Номер телефону або логін  
: [ru] Номер телефона или логин  
Hint:  
: [en] Enter your phone number or login  
: [uk] Вкажіть номер телефону або логін  
: [ru] Укажите номер телефона или логин  
## JSON Object 
```json
 {"code":"bkm-g-belaia-tserkov_uah","method":"bkm-g-belaia-tserkov","currency":"UAH","fields":[{"key":"client_id","type":"string","label":{"en":"Your phone number or login","uk":"\u041d\u043e\u043c\u0435\u0440 \u0442\u0435\u043b\u0435\u0444\u043e\u043d\u0443 \u0430\u0431\u043e \u043b\u043e\u0433\u0456\u043d","ru":"\u041d\u043e\u043c\u0435\u0440 \u0442\u0435\u043b\u0435\u0444\u043e\u043d\u0430 \u0438\u043b\u0438 \u043b\u043e\u0433\u0438\u043d"},"regexp":"\/^(\\w|\\.| |\\-|\\+|@){1,128}$\/","required":true,"position":1,"hint":{"en":"Enter your phone number or login","uk":"\u0412\u043a\u0430\u0436\u0456\u0442\u044c \u043d\u043e\u043c\u0435\u0440 \u0442\u0435\u043b\u0435\u0444\u043e\u043d\u0443 \u0430\u0431\u043e \u043b\u043e\u0433\u0456\u043d","ru":"\u0423\u043a\u0430\u0436\u0438\u0442\u0435 \u043d\u043e\u043c\u0435\u0440 \u0442\u0435\u043b\u0435\u0444\u043e\u043d\u0430 \u0438\u043b\u0438 \u043b\u043e\u0433\u0438\u043d"},"example":"anton93"}],"amount_min":2,"amount_max":14999}```  
