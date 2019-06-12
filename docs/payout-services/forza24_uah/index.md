## General 
**Code:** `forza24_uah`  
**Method:** `forza24`  
**Currency:** `UAH` [show -->]() 
**Amount limits:** from `200`  to `149900`  UAH ## Fields 
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
: [en] Phone number  
: [ru] Номер телефона  
: [uk] Номер телефону  
Hint:  
: [en] Enter phone number  
: [ru] Введите номер телефона  
: [uk] Введіть номер телефону  
## JSON Object 
```json
 {"code":"forza24_uah","method":"forza24","currency":"UAH","fields":[{"key":"client_id","type":"string","label":{"en":"Phone number","ru":"\u041d\u043e\u043c\u0435\u0440 \u0442\u0435\u043b\u0435\u0444\u043e\u043d\u0430","uk":"\u041d\u043e\u043c\u0435\u0440 \u0442\u0435\u043b\u0435\u0444\u043e\u043d\u0443"},"regexp":"\/^\\d{1,128}$\/","required":true,"position":1,"hint":{"en":"Enter phone number","ru":"\u0412\u0432\u0435\u0434\u0438\u0442\u0435 \u043d\u043e\u043c\u0435\u0440 \u0442\u0435\u043b\u0435\u0444\u043e\u043d\u0430","uk":"\u0412\u0432\u0435\u0434\u0456\u0442\u044c \u043d\u043e\u043c\u0435\u0440 \u0442\u0435\u043b\u0435\u0444\u043e\u043d\u0443"},"example":"380634864244"}],"amount_min":200,"amount_max":149900}```  
