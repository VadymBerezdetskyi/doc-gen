## General 
**Code:** `pat-kb-globus-pogashennia-kreditiv_uah`  
**Method:** `pat-kb-globus-pogashennia-kreditiv`  
**Currency:** `UAH` [show -->]() 
**Amount limits:** from `0.9`  to `14999`  UAH ## Fields 
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
: [en] Phone number (from 380) or INN  
: [uk] Номер телефону (з 380) або ІПН  
: [ru] Номер телефона (с 380) или ИНН  
Hint:  
: [en] Phone number (from 380) or INN  
: [uk] Номер телефону (з 380) або ІПН  
: [ru] Номер телефона (с 380) или ИНН  
## JSON Object 
```json
 {"code":"pat-kb-globus-pogashennia-kreditiv_uah","method":"pat-kb-globus-pogashennia-kreditiv","currency":"UAH","fields":[{"key":"client_id","type":"string","label":{"en":"Phone number (from 380) or INN","uk":"\u041d\u043e\u043c\u0435\u0440 \u0442\u0435\u043b\u0435\u0444\u043e\u043d\u0443 (\u0437 380) \u0430\u0431\u043e \u0406\u041f\u041d","ru":"\u041d\u043e\u043c\u0435\u0440 \u0442\u0435\u043b\u0435\u0444\u043e\u043d\u0430 (\u0441 380) \u0438\u043b\u0438 \u0418\u041d\u041d"},"regexp":"\/^\\d{1,128}$\/","required":true,"position":1,"hint":{"en":"Phone number (from 380) or INN","uk":"\u041d\u043e\u043c\u0435\u0440 \u0442\u0435\u043b\u0435\u0444\u043e\u043d\u0443 (\u0437 380) \u0430\u0431\u043e \u0406\u041f\u041d","ru":"\u041d\u043e\u043c\u0435\u0440 \u0442\u0435\u043b\u0435\u0444\u043e\u043d\u0430 (\u0441 380) \u0438\u043b\u0438 \u0418\u041d\u041d"},"example":"1234567890"}],"amount_min":0.9,"amount_max":14999}```  
