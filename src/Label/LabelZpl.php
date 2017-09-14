<?php
/**
 * Created by PhpStorm.
 * User: alberto
 * Date: 09/05/17
 * Time: 17.39
 */

namespace Tnt\Label;

class LabelZpl
{
    public static function createZplItaly($xml)
    {
        $kg = str_split($xml->Complete->Weight, 5);
        $newDate = date("d/m/Y", strtotime($xml->Complete->Date));

        $zpl = "^XA~TA000~JSN^LT0^MMT^MNW^MTD^PON^PMN^LH0,0^JMA^PR7,7^MD0^JUS^LRN^CI0^XZ
        ~DG000.GRF,04096,032,
        ,::::::::::::::::::::::::::::P057FHF40P05FHF40P017FFD40,P0KFE0O02FJF80O0BFIFE0,N017FKFD0M05FLF40L017FKFD,N03FMF80L0BFLFE0L03FMF80,M01FOFL07FNFC0K07FNF0,M03FOF80J0PFE0J03FOF8,L017FOFD0I01FPFJ017FOFD,M0IFE8002FIF80H03FHFA800BFHF80I0JF8002FIF80,L07FHFC0I07FHFC0H07FHF40H01FIFI07FHFC0I07FHFC0,L07FFE0K07FFE0H0IF80J02FHF8003FFE0K07FFE0,K01FHFC0K01FHFH07FHFL017FFD01FHFC0J0H1IF0,K03FFE0M0BFF807FF80L03FFE01FFE0M0IF8,K07FFC0M07FFC1FHFN017FF07FFC0M07FFC,K07FE0O0HFE0FFC0N03FF03FE0O0HFE,J01FHFO017FF3FFC0N01FFDFHFP07FF,K0HF80O03FF3FF0P0HF8FFC0O03FF,J01FF400404040401FIFE0040J04007FIFC04040404001FF80,J03FE00FLFE00FIF803FE0H0HFC03FHFE00FMF80FF80,J07FF01FMF01FIFC07FF801FFC03FIF01FMF01FFC0,J03FE01FMFH03FHF803FF800FFC01FHFE00FMF807FE0,J07FC01FMFH07FHFH07FFC00FFC01FHFC01FMFH07FE0,J0HF800FMFH03FFE003FFE00FFC00FHF800FMF803FE0,I01FF801FMFH01FHFH07FHF01FFC007FF801FMFH01FF0,J0HF800FMFH01FFE003FHF80FFC007FF800FMF801FF0,I01FF001557FFD55001FFC007FHFC07FC007FF001557FFD55001FF0,I01FE0J03FF80J0HF8003FHFE0FFC003FE0J03FF80J0FE0,I01FF0J03FFC0I01FFC007FIF1FFC003FF0J03FFC0I01FF0,I03FE0J03FF80J0HF8003FIF8FFC003FE0J03FF80J0HF8,I03FE0J03FFC0J0HFC007FIFCFFC001FF0J03FFC0J07FC,I03FE0J03FF80J0HF8003FIFCFFC003FE0J03FF80J07F8,I03FF0J03FFC0J0HF8007FLFC001FF0J03FFC0J07FC,I03FE0J03FF80J0HF8003FEFJFC001FE0J03FF80J0HF8,I03FE0J03FFC0J07FC007FF7FIFC001FE0J03FFC0J07FC,I03FE0J03FF80J0HF8003FE3FIFC003FE0J03FF80J07F8,I01FF0J03FFC0J0HFC007FF1FIFC003FF0J03FFC0I017FC,I01FE0J03FF80J0HF8003FE0FIFC003FE0J03FF80J0HF8,I01FF0J03FFC0I01FFC007FF07FHFC007FF0J01FFC0J0HF0,J0HFK03FF80J0HFC003FE03FHFC003FE0J03FF80J0HF0,I01FF0J03FFC0I01FFC007FF03FHFC007FF0J01FFC0I01FF0,J0HF80I03FF80I01FFE003FE01FHFC007FF80I03FF80I01FE0,J0HFC0I03FFC0I03FHFH07FF01FHFC00FHFC0I01FFC0I03FF0,J07F80I03FF80I03FFE003FE007FFC00FHF80I03FF80I03FE0,J07FD0I03FFC0H017FHFH07FF007FFC01FHFC0I01FFC0I07FD0,J03FE0I03FF80I0JF803FE003FFC03FHFE0I03FF80I0HFC0,J07FF0I03FFC0H01FIFC07FF001FFC07FIFJ01FFC0H01FFC0,J01FF80H02AA0J0JFE02AA0H02A807FIF80I0HA80I0HF80,J01FFC0O07FF7FF0O01FFDFFC0O03FF,K0HFE0O07FE3FF80N01FF8FFE0O03FE,K07FF0N01FFE1FFC0N07FF47FF0O07FE,K03FF80M03FF80FFE0N0HFE03FE80M02FF8,K01FFD0L017FFC1FHFN01FHF01FFD0M07FFC,L0IF80L0IFH03FF80L03FFC00FHF80L0IF8,L07FFC0K07FFE001FHFL01FHFC007FFC0K07FHF0,L03FHF80J0IF80H0IFE0J03FFE0H03FFE0K0IF80,L01FIF5015FIFJ07FHFD0115FHFD0H01FIF51H1JFC0,M0KFHAJFE0I03FIFHABFIF80I0JFEAABFHFE,M07FOFC0I01FPFK07FOFC,N0OFE0K02FNF80K0OFE0,N07FMFD0K01FNFL017FMFD0,O0MFE0M03FLF80M0MFE,O05FKF40N07FJFD0N05FKF4,P02FHFE80P0JFE0P02FHFE80,Q015D0R017FD0R01FF4,,:::::::::::::::::::::::::::::::::::^XA^LL1399
        ^PW799
        ^FT544,128^XG000.GRF,1,1^FS
        ^ID000.GRF^FS
        ^PW799
        ^LS0
        ^PRC^MMT^MSY^PF0^FS
        ^COY,56^FS
        ^LH0,30^FS
        ^LT0^FS
        ^LS0^FS
        
        ^FO007,011^AB,55,21^FD" . $xml->Complete->OriginDepotID . "^FS
        ^FO007,080^AD,36,10^FDCOLLI: " . (int)$xml->Complete->Item->ItemSequenceNo . "/" . $xml->Complete->ItemNo . "^FS
        ^FO007,120^AD,36,10^FDPESO: " . (int)$kg[0] . "," . $kg[1] . " KG^FS
        ^FO427,077^AD,36,10^FD" . $xml->Complete->Option . "^FS
        ^FO427,187^AD,18,10^FDData: " . $newDate . "^FS
        ^FO427,207^AD,36,10^FDLDV:" . $xml->Complete->TNTConNo . "^FS
        ^FO007,180^AD,36,10^FR^FDMITTENTE: " . $xml->Complete->SenderName . "^FS
        ^FO007,213^AD,36,10^FR^FD" . $xml->Complete->Receiver->Name . "^FS
        ^FO007,247^AD,36,10^FR^FD" . $xml->Complete->Receiver->Address . "^FS
        ^FO007,288^AD,38,18^^FR^FD" . $xml->Complete->Receiver->Town . "^FS
        ^FO160,340^AD,120,40^FR^FD" . $xml->Complete->DestinationDepot->DepotID . "^FS
        ^FO007,352^A0,98,80^FR^FD" . $xml->Complete->Item->ItemIncrNo . "^FS
        ^BY3^FS
        ^FO70,580^BC,253,Y,N,N^FD>;" . $xml->Complete->Item->Barcode . "^FS
        ^FO007,447^AD,65,20^FD" . $xml->Complete->DestinationDepot->DepotName . "^FS
        ^FO007,531^AD,36,10^FDR.C.: " . $xml->Complete->SenderReference . "^FS
        ^FO400,240^GB0,240,247,B^FS
        ^FO407,244^AD,90,60^FR^FD" . $xml->Complete->SpecialGoods . "^FS
        ^FO407,320^AD,90,60^FR^FD" . $xml->Complete->Service . "^FS
        ^FO407,404^AD,90,60^FR^FD" . $xml->Complete->DestinationHUB . "^FS
        ^FO400,493^AD,90,30^FR^FD" . $xml->Complete->Microzone . "^FS
        ^FO0680,220^A0R,40,30^FD" . $xml->Complete->Receiver->Name . "^FS
        ^FO0720,220^A0R,40,30^FDEXT1^FS
        ^FO007,900^AD,36,10^FDPrinted by OnePieceFlow^FS
        ^PQ1,0,1,Y^XZ";

        return $zpl;
    }

    public static function createZplFirstTime($xml, $shipment)
    {
        $kg = str_split($xml->Complete->Weight, 5);
        $newDate = date("d/m/Y", strtotime($xml->Complete->Date));
        $zpl = "^XA
            ^CI27
            ^CI0,154,220
            ^SZ2
            ^JMA
            ^MCY
            ^PMN
            ^PW791~JSN
            ^JZY
            ^LH0,0
            ^LRN
            ^XZ
            ~DGR:SSGFX000.GRF,1750,25,:Z64:eJyNlV1uHSEMhUHzwCNLYCksjbkr6JIyVRcSlkDUh04linv8A5mJbqJE0ZjwOTYYfHDORdod/0QS4/JQ6wo1s1Us0SE2EJFZcU1E3SKQxEpmszkgAkkstojlYTQWD06bgMNG6qCDoak4+LQ6ILNDUwmIAnbOebGymO45W6ZzY4tdBQEZXhFZ+Y+ErGwzL6sQLwBAFtA8x08MeKmOw8mSEa6qo0y40mUCXoGdvYAqBVVQupYa3ptsP1HQeg2tfelOJwLpRBpJK9ztdDb6MbT0uauDi0PB6wSnHAVA5+I8UOCEPTzopaH8WAqiyQEB5JMBVQO5CUCFEja5G8BogXoFbgGULbFfoUPBkesCxAGYCSiHgPQBlHeA38cduCAnDfCTPxhjj/mgCdwd1Cv49QREBm8AY4H9BuJT8Pc7oF3An3+fgN/0HXDN8fYZaHTbx3EHz0qCa3ABl+q2/AXIq+wLHAmnzwcloODMvwZ8GVrkc1WAW9IElAWOj6AmdCtfOAa4L/gqaKltcncNxM7A86VW0BjgUkdpFE+vp/bJy6l9shpnddRsnGDqNkGarbZJc0aKs2vFAZ2o/T3bOVufo529yl6fArCUwS3JaO9aoqDLhIlME4fAn3LRq0jVq/wdXNcqAlZE9ljIdi6piaNIn2pimZo4xTLZRDI1vevuMMfuTKGHOZzmcE5tP03Kp7bLe5FtUEzsyV4F+V8t5Ho/9JnwNgj2oARLYfs0zdakap3Tl8d5fapcEPsfYAUjKA==:4FF6
            ^XA
            ^CI27
            ^FO16,183^GB775,0,4^FS
            ^FO16,327^GB775,0,4^FS
            ^FO16,423^GB400,0,4^FS
            ^FO16,619^GB400,0,1^FS
            ^FO16,820^GB400,0,4^FS
            ^FO16,924^GB775,0,4^FS
            ^FO414,184^GB0,740,4^FS
            ^FO214,24^GB0,161,4^FS
            ^FO416,398^GB375,0,1^FS
            ^FO416,775^GB375,0,1^FS
            ^FO416,840^GB375,0,1^FS
            ^FO614,24^GB0,161,95^FS
            ^FO415,257^GB376,0,73^FS
            ^FO127,831^GB282,0,86^FS
            ^FT240,1210^A0N,16,16^FD^FS
            ^CI0
            ^FT24,207^A0N,17,19^FDCon No.^FS
            ^FT24,286^A0N,17,19^FDPiece^FS
            ^FT24,350^A0N,17,19^FDCustomer Reference^FS
            ^FT24,414^A0N,17,19^FDS/R Account No.^FS
            ^FT24,641^A0N,17,19^FDDelivery Address^FS
            ^FT24,454^A0N,17,19^FDSender Address^FS
            ^FT24,868^A0N,17,19^FDPostcode /^FS
            ^FT24,892^A0N,17,19^FDCluster Code^FS
            ^FT240,286^A0N,17,19^FDWeight^FS
            ^FT424,207^A0N,17,23^FR^FDService^FS
            ^FT424,275^A0N,17,23^FR^FDOption^FS
            ^FT424,347^A0N,17,19^FDOrigin^FS
            ^FT424,424^A0N,17,19^FDRouting^FS
            ^FT424,800^A0N,17,19^FDSort^FS
            ^FT424,876^A0N,17,19^FDDest^FS
            ^FT424,900^A0N,17,19^FDDepot^FS
            ^FT635,347^A0N,17,19^FDPickup Date^FS
            ^CI27
            ^FT32,248^A0N,45,57^FD" . $xml->Complete->TNTConNo . "^FS
            ^FT32,317^A0N,28,32^FD" . (int)$xml->Complete->Item->ItemSequenceNo . " of " . $xml->Complete->ItemNo . "^FS
            ^FT232,74^A0N,39,54^FD" . $xml->Complete->Routing->RoutingDescription . "^FS
            ^FT232,120^A0N,39,54^FD" . $xml->Complete->Routing->SortHazardCode . "^FS
            ^FB400,3,0,L,0
            ^FT232,177^A0N,18^FD^FS
            ^FT439,240^A0N,34,39^FD" . $xml->Complete->ProductDescription . "^FS
            ^FT440,310^A0N,34,39^FR^FD" . $xml->Complete->OptionDescription . "^FS
            ^FT480,388^A0N,56,64^FD" . $xml->Complete->OriginDepotID . "^FS
            ^FT640,375^A0N,23,28^FD" . $newDate . "^FS
            ^FT710,138^A0N,102,150^FD" . $xml->Complete->Routing->SortSplitCode . "^FS           
            ^FT620,138^A0N,102,150^FR^FD" . $xml->Complete->Reference->ValueCode . "^FS         
            ^FT256,317^A0N,28,35^FD " . (int)$kg[0] . "." . substr($kg[1], 0, 2) . " KG^FS          
            ^FT24,373^A0N,25,23^FD" . $xml->Complete->SenderReference . "^FS
            ^FT184,417^A0N,25,27^FD" . $xml->Complete->Sender->Account . "^FS
            ^FT141,902^A0N,73,58^FR^FD" . $xml->Complete->Delivery->PostCode . "^FS
            ^FT40,484^A0N,25,20^FD" . $xml->Complete->SenderName . "^FS
            ^FT40,514^A0N,25,20^FD" . $xml->Complete->Sender->Address . "^FS
            ^FT40,546^A0N,25,20^FD^FS        
            ^FT40,554^A0N,25,20^FD" . $xml->Complete->Sender->Town . " " . $shipment->consignment->addresses->SenderAddress->postcode . "^FS
            ^FT40,584^A0N,25,20^FD" . $xml->Complete->Sort->LocalHubFromCountry . "^FS
            ^FT40,671^A0N,25,20^FD" . $xml->Complete->Receiver->Name . "^FS
            ^FT40,704^A0N,25,20^FD" . $xml->Complete->Receiver->Address . "^FS
            ^FT40,735^A0N,25,20^FD^FS       
            ^FT40,768^A0N,25,20^FD" . $xml->Complete->Receiver->Town . " " . $xml->Complete->Delivery->PostCode . "^FS
            ^FT40,799^A0N,25,20^FD" . $xml->Complete->Destination->CountryId . "^FS
            ^FT496,479^A0N,80,82^FD" . $xml->Complete->Routing->ViaDepot1 . "^FS
            ^FT496,570^A0N,80,82^FD" . $xml->Complete->Routing->ViaDepot2 . "^FS
            ^FT496,661^A0N,80,82^FD" . $xml->Complete->Routing->ViaDepot3 . "^FS
            ^FT496,752^A0N,80,82^FD" . $xml->Complete->Routing->ViaDepot4 . "^FS
            ^FT470,830^A0N,56,64^FD" . $xml->Complete->Destination->LocalHubToDepotDescription . "^FS
            ^FT496,915^A0N,80,82^FD" . $xml->Complete->Destination->Depot . " " . $xml->Complete->Delivery->DepotActionDate . "^FS
            ^FO82,945^BY3^BCN,220,N,N^FD>;" . $xml->Complete->Item->Barcode . "^FS
            ^FT160,1187^A0N,23,32^FD" . $xml->Complete->Item->Barcode . "^FS
            ^FT340,1200^FDPrinted by OnePieceFlow^FS
            ^FO17,66 ^XGR:SSGFX000.GRF,1,1^FS
            ^PQ1,0,1,Y
            ^XZ
            ^XA
            ^IDR:SSGFX000.GRF^FS
            ^XZ";
        return $zpl;
    }

    public static function createZplWorld($xml)
    {
        $kg = str_split($xml->Complete->Weight, 5);
        $newDate = date("d/m/Y", strtotime($xml->Complete->Date));
        $zpl = "^XA
            ^CI27
            ^CI0,154,220
            ^SZ2
            ^JMA
            ^MCY
            ^PMN
            ^PW791~JSN
            ^JZY
            ^LH0,0
            ^LRN
            ^XZ
            ~DGR:SSGFX000.GRF,1750,25,:Z64:eJyNlV1uHSEMhUHzwCNLYCksjbkr6JIyVRcSlkDUh04linv8A5mJbqJE0ZjwOTYYfHDORdod/0QS4/JQ6wo1s1Us0SE2EJFZcU1E3SKQxEpmszkgAkkstojlYTQWD06bgMNG6qCDoak4+LQ6ILNDUwmIAnbOebGymO45W6ZzY4tdBQEZXhFZ+Y+ErGwzL6sQLwBAFtA8x08MeKmOw8mSEa6qo0y40mUCXoGdvYAqBVVQupYa3ptsP1HQeg2tfelOJwLpRBpJK9ztdDb6MbT0uauDi0PB6wSnHAVA5+I8UOCEPTzopaH8WAqiyQEB5JMBVQO5CUCFEja5G8BogXoFbgGULbFfoUPBkesCxAGYCSiHgPQBlHeA38cduCAnDfCTPxhjj/mgCdwd1Cv49QREBm8AY4H9BuJT8Pc7oF3An3+fgN/0HXDN8fYZaHTbx3EHz0qCa3ABl+q2/AXIq+wLHAmnzwcloODMvwZ8GVrkc1WAW9IElAWOj6AmdCtfOAa4L/gqaKltcncNxM7A86VW0BjgUkdpFE+vp/bJy6l9shpnddRsnGDqNkGarbZJc0aKs2vFAZ2o/T3bOVufo529yl6fArCUwS3JaO9aoqDLhIlME4fAn3LRq0jVq/wdXNcqAlZE9ljIdi6piaNIn2pimZo4xTLZRDI1vevuMMfuTKGHOZzmcE5tP03Kp7bLe5FtUEzsyV4F+V8t5Ho/9JnwNgj2oARLYfs0zdakap3Tl8d5fapcEPsfYAUjKA==:4FF6
            ^XA
            ^CI27
            ^FO16,183^GB775,0,4^FS
            ^FO16,327^GB775,0,4^FS
            ^FO16,423^GB400,0,4^FS
            ^FO16,619^GB400,0,1^FS
            ^FO16,820^GB400,0,4^FS
            ^FO16,924^GB775,0,4^FS
            ^FO414,184^GB0,740,4^FS
            ^FO214,24^GB0,161,4^FS
            ^FO416,398^GB375,0,1^FS
            ^FO416,775^GB375,0,1^FS
            ^FO416,840^GB375,0,1^FS
            ^FO614,24^GB0,161,95^FS
            ^FO415,257^GB376,0,73^FS
            ^FO127,831^GB282,0,86^FS
            ^FT240,1210^A0N,16,16^FD^FS
            ^CI0
            ^FT24,207^A0N,17,19^FDCon No.^FS
            ^FT24,286^A0N,17,19^FDPiece^FS
            ^FT24,350^A0N,17,19^FDCustomer Reference^FS
            ^FT24,414^A0N,17,19^FDS/R Account No.^FS
            ^FT24,641^A0N,17,19^FDDelivery Address^FS
            ^FT24,454^A0N,17,19^FDSender Address^FS
            ^FT24,868^A0N,17,19^FDPostcode /^FS
            ^FT24,892^A0N,17,19^FDCluster Code^FS
            ^FT240,286^A0N,17,19^FDWeight^FS
            ^FT424,207^A0N,17,23^FR^FDService^FS
            ^FT424,275^A0N,17,23^FR^FDOption^FS
            ^FT424,347^A0N,17,19^FDOrigin^FS
            ^FT424,424^A0N,17,19^FDRouting^FS
            ^FT424,800^A0N,17,19^FDSort^FS
            ^FT424,876^A0N,17,19^FDDest^FS
            ^FT424,900^A0N,17,19^FDDepot^FS
            ^FT635,347^A0N,17,19^FDPickup Date^FS
            ^CI27
            ^FT32,248^A0N,45,57^FD" . $xml->Complete->TNTConNo . "^FS
            ^FT32,317^A0N,28,32^FD" . (int)$xml->Complete->Item->ItemSequenceNo . " of " . $xml->Complete->ItemNo . "^FS
            ^FT232,74^A0N,39,54^FD" . $xml->Complete->Routing->RoutingDescription . "^FS
            ^FT232,120^A0N,39,54^FD" . $xml->Complete->Routing->SortHazardCode . "^FS
            ^FB400,3,0,L,0
            ^FT232,177^A0N,18^FD^FS
            ^FT439,240^A0N,34,39^FD" . $xml->Complete->ProductDescription . "^FS
            ^FT440,310^A0N,34,39^FR^FD" . $xml->Complete->OptionDescription . "^FS
            ^FT480,388^A0N,56,64^FD" . $xml->Complete->OriginDepotID . "^FS
            ^FT640,375^A0N,23,28^FD" . $newDate . "^FS
            ^FT710,138^A0N,102,150^FD" . $xml->Complete->Routing->SortSplitCode . "^FS           
            ^FT620,138^A0N,102,150^FR^FD" . $xml->Complete->Reference->ValueCode . "^FS         
            ^FT256,317^A0N,28,35^FD " . (int)$kg[0] . "." . substr($kg[1], 0, 2) . " KG^FS          
            ^FT24,373^A0N,25,23^FD" . $xml->Complete->SenderReference . "^FS
            ^FT184,417^A0N,25,27^FD" . $xml->Complete->AccountNo . "^FS
            ^FT141,902^A0N,73,58^FR^FD" . $xml->Complete->Receiver->ZIPCode . "^FS
            ^FT40,484^A0N,25,20^FD" . $xml->Complete->SenderName . "^FS
            ^FT40,514^A0N,25,20^FD" . $xml->Complete->SndAddress . "^FS
            ^FT40,546^A0N,25,20^FD^FS        
            ^FT40,554^A0N,25,20^FD" . $xml->Complete->SndTown . " " . $xml->Complete->SndZIPCode . "^FS
            ^FT40,584^A0N,25,20^FD" . $xml->Complete->SndCountry . "^FS
            ^FT40,671^A0N,25,20^FD" . $xml->Complete->Receiver->Name . "^FS
            ^FT40,704^A0N,25,20^FD" . $xml->Complete->Receiver->Address . "^FS
            ^FT40,735^A0N,25,20^FD^FS       
            ^FT40,768^A0N,25,20^FD" . $xml->Complete->Receiver->Town . " " . $xml->Complete->Receiver->ZIPCode . "^FS
            ^FT40,799^A0N,25,20^FD" . $xml->Complete->Receiver->Country . "^FS
            ^FT496,479^A0N,80,82^FD" . $xml->Complete->Routing->ViaDepot1 . "^FS
            ^FT496,570^A0N,80,82^FD" . $xml->Complete->Routing->ViaDepot2 . "^FS
            ^FT496,661^A0N,80,82^FD" . $xml->Complete->Routing->ViaDepot3 . "^FS
            ^FT496,752^A0N,80,82^FD" . $xml->Complete->Routing->ViaDepot4 . "^FS
            ^FT470,830^A0N,56,64^FD" . $xml->Complete->Destination->LocalHubToDepotDescription . "^FS
            ^FT496,915^A0N,80,82^FD" . $xml->Complete->Destination->Depot . " " . $xml->Complete->Delivery->DepotActionDate . "^FS
            ^FO82,945^BY3^BCN,220,N,N^FD>;" . $xml->Complete->Item->Barcode . "^FS
            ^FT160,1187^A0N,23,32^FD" . $xml->Complete->Item->Barcode . "^FS
            ^FT340,1200^FDPrinted by OnePieceFlow^FS
            ^FO17,66 ^XGR:SSGFX000.GRF,1,1^FS
            ^PQ1,0,1,Y
            ^XZ
            ^XA
            ^IDR:SSGFX000.GRF^FS
            ^XZ";
        return $zpl;
    }
}