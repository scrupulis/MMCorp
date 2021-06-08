

var CurrentCard = 1;
const direction_left = 'left';
const direction_right = 'right';


// 現在表示されているカルーセルカードを取得します。
function getCurrentCarouselCard( person_id ){

    const padding_width_inter_cards = 16;
    const count_cards = 5;

    // 基準となるカルーセルカードを取得
    var stdCard = document.getElementById(`carousel-cardnum-${person_id}-1`);

    // 基準となるカルーセルカードの位置を取得
    var position = stdCard.style.left;

    // 基準となるカードの幅を取得
    var width = stdCard.style.clientWidth;

    // 基準となるカードが何番目に表示されているのか確認
    var stdPosition = Math.floor(position/width) + 1;

    console.log(`基準カード位置 = ${stdPosition}`);

    // 現在表示されているカードを算出
    var currentCard = 0;
    if(stdPosition == 1)
    {
        currentCard = 1;
    }
    else
    {
        currentCard = Math.abs(stdPosition) + 2;
    }
    console.log(`現在のカード：${currentCard}`);

}

function moveCarouselCards( doirection , person_id )
{
    console.log(` moveCarousel @ Curretn Card is ${CurrentCard}`);
    const count_cards = 5;
    const margin = 16;

    var margin2 = 0;

    switch(direction)
    {
        case direction_left:
            if ( CurrentCard < count_cards )
            {
                // すべてのカードを左にずらす
                setCardPosition();

                // 現在の表示カードを変更
                CurrentCard++;

            }
            break;
        case direction_right:
            if( CurrentCard > 1 )
            {
                // すべてのカードを右にずらす
                setCardPosition();

                // 現在の表示カードを変更
                CurrentCard--;
            }
            break;
        default:
            console.log(`移動方法パラメータ${direction}は不正な値です。`);
    }
}


function setCardPosition( direction , person_id )
{

    let prefix = 0;
    let thres = 0;

    const carousel_personid_prefix = "carousel-person"; // 動かす対象のカルーセル
    const countCards = 5;
    const margin = 16;
    var margin2 = 0;
    var _margin2 = 0;
    

    if(direction_right = left)
    {
        prefix = 1;
        _margin2 = 16;
    }
    else
    {
        prefix = -1;
        _margin2 = 0;
    }


    for( let i = 1 ; i < countCards ; ++i )
    {

        let id = `carousel-cardnum-${person_id}-${i}`;
        let targetCard = document.getElementById(id);

        if( targetCard != null )
        {
            let widthCarouselCard = targetCard.style.clientWidth;           // 動かす対象のカードの幅を取得
            let getCurrentLeft = parseInt( targetCard.style.left , 10 );    // 現在のカードに位置を取得
            let newLeft = `${currentLeft + ( prefix * ( widthCarouselCard + margin + margin2 ) )}`; // 移動後のカードの位置を計算
        }

    }

}


// カルーセルを動かします
function moveCarousel( direction , person_id )
{

    console.log(` moveCarousel @ Curretn Card is ${CurrentCard}`);
    const count_cards = 5;
    const margin = 16;
    var margin2 = 0;

    // 動かすカルーセルを取得
    const carousel_personid_prefix = "carousel-person";
    var target_carousel = document.getElementById( carousel_personid_prefix + person_id ); 

    if( target_carousel != null )
    {

        for ( let i = 1 ; i <= count_cards ; i++ ){

            let id = `carousel-cardnum-${person_id}-${i}`;
            let target = document.getElementById(id);

            if( target != null )
            {

                let width_carousel_card = target.clientWidth;
                let currentLeft = parseInt(target.style.left , 10);                
                let newLeft = `${currentLeft - width_carousel_card - margin - margin}`;

                switch(direction){
                    case 'left':
                        if(CurrentCard < count_cards)
                        {
                            console.log(`カルーセルを左に移動します。現在のカードは${CurrentCard}です。カードの上限数は${count_cards}です。`);
                            if(CurrentCard == 1) margin2 = 16;
                            else margin2 = 0;
                            newLeft = `${currentLeft - width_carousel_card - margin - margin2}`
                            target.style.left = newLeft;
                        }
                        break;
                    case 'right':
                        if( CurrentCard > 1)
                        {
                            console.log(`カルーセルを右に移動します。現在のカードは${CurrentCard}です。カードの上限数は${count_cards}です。`);
                            if(CurrentCard == 1) margin2 = 0;
                            else margin2 = 16;
                            newLeft = `${currentLeft + width_carousel_card + margin + margin2}`
                            target.style.left = newLeft;
                        }
                        break;
                    default:
                        console.log(`無効なカルーセル移動です。引数の値${direction}は不正です。`);
                }

                
                
            }
            else
            {
                console.log(`${id}を取得出来ませんでした。`);
            }

        }

        if( direction == "left" )
        {
            CurrentCard++;
        }
        else
        {
            CurrentCard--;
        }
        console.log(`Cards moved. Current Card is ${CurrentCard}`);

    }
    else
    {
        console.log("対象カルーセルを取得出来ません。");
    }

}