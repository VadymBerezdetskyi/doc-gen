## General 
**Code:** `lider-net-ivano-frankovsk_uah`  
**Method:** `lider-net-ivano-frankovsk`  
**Currency:** `UAH` [show -->]() 
**Amount limits:** from `2`  to `14999`  UAH ## Fields 
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
: [en] Number of a special rakhunka  
: [uk] Номер особового рахунку  
: [ru] Номер особого рахунку  
Hint:  
: [en] Number of a special rakhunka  
: [uk] Номер особового рахунку  
: [ru] Номер особого рахунку  
## JSON Object 
```json
 {"code":"lider-net-ivano-frankovsk_uah","method":"lider-net-ivano-frankovsk","currency":"UAH","fields":[{"key":"client_id","type":"string","label":{"en":"Number of a special rakhunka","uk":"\u041d\u043e\u043c\u0435\u0440 \u043e\u0441\u043e\u0431\u043e\u0432\u043e\u0433\u043e \u0440\u0430\u0445\u0443\u043d\u043a\u0443","ru":"\u041d\u043e\u043c\u0435\u0440 \u043e\u0441\u043e\u0431\u043e\u0433\u043e \u0440\u0430\u0445\u0443\u043d\u043a\u0443"},"regexp":"\/^\\d{1,128}$\/","required":true,"position":1,"hint":{"en":"Number of a special rakhunka","uk":"\u041d\u043e\u043c\u0435\u0440 \u043e\u0441\u043e\u0431\u043e\u0432\u043e\u0433\u043e \u0440\u0430\u0445\u0443\u043d\u043a\u0443","ru":"\u041d\u043e\u043c\u0435\u0440 \u043e\u0441\u043e\u0431\u043e\u0433\u043e \u0440\u0430\u0445\u0443\u043d\u043a\u0443"},"example":"1447681307"}],"amount_min":2,"amount_max":14999}```  
