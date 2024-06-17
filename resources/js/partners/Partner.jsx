export default function Partner({ name, url }) {

    return (
        <div className="partner">

            <a href={ url } target="_blank">{ name }</a>

        </div>
    )
}