## General 
**Code:** `kiyivstar-popovnennia-rakhunku-za-nomerom-telefonu_uah`  
**Method:** `kiyivstar-popovnennia-rakhunku-za-nomerom-telefonu`  
**Currency:** `UAH` [show -->]() 
**Amount limits:** from `0.01`  to `14999`  UAH ## Fields 
### Overview 
|Key|Required|Type|Regexp| 
|:---:|:---:|:---:|:---:| 
|`client_id` |✔ |`string` |`/^\+?(380)(67|68|96|97|98)\d{7}$/` | 
 
### Details 
0 **`client_id` **  
Type: `string`  
Regexp: `/^\+?(380)(67|68|96|97|98)\d{7}$/`  
Required: `1`  
Label:  
: [en] The phone number  
: [uk] Номер телефону  
: [ru] Номер телефона  
Hint:  
: [en] Enter the phone number  
: [uk] Введіть номер телефону  
: [ru] Введите номер телефона  
## JSON Object 
```json
 {"code":"kiyivstar-popovnennia-rakhunku-za-nomerom-telefonu_uah","method":"kiyivstar-popovnennia-rakhunku-za-nomerom-telefonu","currency":"UAH","fields":[{"key":"client_id","type":"string","label":{"en":"The phone number","uk":"\u041d\u043e\u043c\u0435\u0440 \u0442\u0435\u043b\u0435\u0444\u043e\u043d\u0443","ru":"\u041d\u043e\u043c\u0435\u0440 \u0442\u0435\u043b\u0435\u0444\u043e\u043d\u0430"},"regexp":"\/^\\+?(380)(67|68|96|97|98)\\d{7}$\/","required":true,"position":1,"hint":{"en":"Enter the phone number","uk":"\u0412\u0432\u0435\u0434\u0456\u0442\u044c \u043d\u043e\u043c\u0435\u0440 \u0442\u0435\u043b\u0435\u0444\u043e\u043d\u0443","ru":"\u0412\u0432\u0435\u0434\u0438\u0442\u0435 \u043d\u043e\u043c\u0435\u0440 \u0442\u0435\u043b\u0435\u0444\u043e\u043d\u0430"},"example":"0979990989"}],"amount_min":0.01,"amount_max":14999}```  
