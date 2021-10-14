
import React, { Fragment } from 'react'
import { ListItem,ListItemIcon ,ListItemText} from '@mui/material'
import InboxIcon from '@mui/icons-material/MoveToInbox';
import { Link } from '@mui/material';
const SidebarItem = (props) => {
    const {text,icon,link} = props
    return (
        <Fragment>
            <ListItem button key={text} component={Link} href={link?link:''}>
              <ListItemIcon onClick={()=>{}}>
                {icon?icon:<InboxIcon />}
              </ListItemIcon>
              <ListItemText primary={text} />
            </ListItem>
        </Fragment>
    )
}

export default SidebarItem
