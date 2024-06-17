import Partner from './Partner';

export default function Partners() {

    const partners = [
        {
            name: 'Penguin/Random House',
            url: 'https://www.penguinrandomhouse.com'
        },
        {
            name: 'Hachette Book Group',
            url: 'https://www.hachettebookgroup.com'
        },
        {
            name: 'Harper Collins',
            url: 'https://www.harpercollins.com'
        },
        {
            name: 'Simon and Schuster',
            url: 'https://www.simonandschuster.biz'
        },
        {
            name: 'Macmillan',
            url: 'https://macmillan.com'
        }
    ];

    return (
        <div className="partners">

            <h2 className="partners__headline">Partners</h2>

            <ul className="partners__list">
                {
                    partners.map((partner, i) => (
                        <Partner key={ i } {...partner} />
                    ))
                }
            </ul>

        </div>
    )

}